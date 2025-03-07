<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DonationSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $orderId;
    public $pdfPath;
    public $userName;
    public $userEmail;
    public $userAddress;
    public $timestamp;

    /**
     * Create a new message instance.
     */
    public function __construct($orderId, $pdfPath, $userName, $userEmail, $userAddress, $timestamp)
    {
        $this->orderId = $orderId;
        $this->pdfPath = $pdfPath;
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userAddress = $userAddress;
        $this->timestamp = $timestamp;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Donation Successful')
                    ->view('emails.donation_success') // Blade template for the email
                    ->attach($this->pdfPath, [
                        'as' => 'donation_qrcode.pdf',
                        'mime' => 'application/pdf',
                    ])
                    ->with([
                        'orderId' => $this->orderId,
                        'userName' => $this->userName,
                        'userEmail' => $this->userEmail,
                        'userAddress' => $this->userAddress,
                        'timestamp' => $this->timestamp,
                    ]);
    }
}