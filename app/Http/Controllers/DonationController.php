<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use TCPDF;
use App\Mail\DonationSuccessMail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DonationController extends Controller
{
    private $client;
    private $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = env('PAYPAL_MODE', 'sandbox') === 'sandbox'
            ? 'https://api.sandbox.paypal.com'
            : 'https://api.paypal.com';
    }

    /**
     * Show the donation form.
     */
    public function showDonationForm()
    {
        return view('donate');
    }

    /**
     * Handle the donation payment.
     */
    public function processDonation(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $amount = $request->input('amount');

        // Get an access token
        $accessToken = $this->getAccessToken();

        // Create an order
        $response = $this->client->post("{$this->baseUrl}/v2/checkout/orders", [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer {$accessToken}",
            ],
            'json' => [
                "intent" => "CAPTURE",
                "purchase_units" => [[
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => number_format($amount, 2, '.', '')
                    ],
                    "description" => "Donation"
                ]],
                "application_context" => [
                    "cancel_url" => route('donation.cancel'),
                    "return_url" => route('donation.success')
                ]
            ]
        ]);

        $order = json_decode($response->getBody(), true);

        // Redirect the user to the approval URL
        foreach ($order['links'] as $link) {
            if ($link['rel'] === 'approve') {
                return redirect($link['href']);
            }
        }

        return redirect()->back()->with('error', 'Payment could not be processed. Please try again.');
    }

    /**
     * Handle successful payment.
     */
    public function donationSuccess(Request $request)
    {
        $orderId = $request->query('token');

        if (!$orderId) {
            return redirect()->route('donation.cancel')->with('error', 'Order ID is missing.');
        }

        // Capture the order
        $accessToken = $this->getAccessToken();

        try {
            $response = $this->client->post("{$this->baseUrl}/v2/checkout/orders/{$orderId}/capture", [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => "Bearer {$accessToken}",
                ]
            ]);

            $result = json_decode($response->getBody(), true);

            if ($result['status'] === 'COMPLETED') {
                // Get user details
                $user = Auth::user();
                $userName = $user->name;
                $userEmail = $user->email;
                $userAddress = $user->address; // Assuming the address is stored in the `address` field
                $timestamp = Carbon::now()->format('Y-m-d H:i:s');

                // Generate and send QR code
                $pdfPath = $this->generateQRCode($orderId, $userName, $userEmail, $userAddress, $timestamp);
                
                // Send email to the authenticated user
                Mail::to($userEmail)->send(new DonationSuccessMail($orderId, $pdfPath, $userName, $userEmail, $userAddress, $timestamp));

                return redirect()->route('donation.form')->with('success', 'Thank you for your payment!');
            } else {
                return redirect()->route('donation.cancel')->with('error', 'Payment execution failed.');
            }
        } catch (\Exception $ex) {
            Log::error('PayPal Error: ' . $ex->getMessage());
            return redirect()->route('donation.cancel')->with('error', 'Payment execution failed.');
        }
    }

    /**
     * Handle cancelled payment.
     */
    public function donationCancel()
    {
        return redirect()->route('donation.form')->with('error', 'payment was cancelled.');
    }

    /**
     * Get an access token from PayPal.
     */
    private function getAccessToken()
    {
        $response = $this->client->post("{$this->baseUrl}/v1/oauth2/token", [
            'auth' => [env('PAYPAL_CLIENT_ID'), env('PAYPAL_SECRET')],
            'form_params' => [
                'grant_type' => 'client_credentials'
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        return $data['access_token'];
    }

    /**
     * Generate a QR code PDF and return the path.
     */
    private function generateQRCode($orderId, $userName, $userEmail, $userAddress, $timestamp)
    {
        // Create new PDF document
        $pdf = new TCPDF();

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Donation QR Code');
        $pdf->SetSubject('Donation QR Code');
        $pdf->SetKeywords('TCPDF, PDF, QR code');

        // Add a page
        $pdf->AddPage();

        // Set font for the text
        $pdf->SetFont('helvetica', '', 12);

        // Add user details to the PDF
        $pdf->Cell(0, 10, "Name: {$userName}", 0, 1);
        $pdf->Cell(0, 10, "Email: {$userEmail}", 0, 1);
        $pdf->Cell(0, 10, "Address: {$userAddress}", 0, 1);
        $pdf->Cell(0, 10, "Timestamp: {$timestamp}", 0, 1);

        // Generate the QR code
        $style = [
            'border' => 0,
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            'fgcolor' => [0, 0, 0],
            'bgcolor' => [255, 255, 255],
            'module_width' => 1,
            'module_height' => 1,
        ];

        // Add QR code to the PDF
        $pdf->write2DBarcode($orderId, 'QRCODE,L', 140, 80, 50, 50, $style, 'N');

        // Save the PDF to a file
        $pdfPath = storage_path("app/public/qrcodes/{$orderId}.pdf");

        // Ensure the directory exists
        if (!file_exists(dirname($pdfPath))) {
            mkdir(dirname($pdfPath), 0777, true);
        }

        // Output the PDF to a file
        $pdf->Output($pdfPath, 'F');

        return $pdfPath; // Return the path of the saved PDF
    }
}