<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Endroid\QrCode\QrCode;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create(Request $request)
    {
        // Validate request
        $request->validate([
            'event_name' => 'required|string',
            'event_date' => 'required|date',
        ]);

        // Generate a unique ticket code
        $ticketCode = uniqid('ticket_');

        // Create a ticket record
        $ticket = Ticket::create([
            'code' => $ticketCode,
            'event_name' => $request->event_name,
            'event_date' => $request->event_date,
        ]);

        // Generate the QR code
        $qrCode = new QrCode($ticketCode);
        $qrCode->setSize(300);
        $qrCode->writeFile(public_path("tickets/{$ticketCode}.png")); // Save the QR code as a PNG file

        return response()->json([
            'ticket' => $ticket,
            'qr_code' => url("tickets/{$ticketCode}.png"),
        ]);
    }
}
