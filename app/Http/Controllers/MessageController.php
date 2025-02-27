<?php
namespace App\Http\Controllers;

use App\Models\Message; // Ensure you have the Message model
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Display a listing of the messages
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    // Show the form for creating a new message
    public function create()
    {
        return view('messages.create');
    }

    // Store a newly created message in storage
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Check if the user is authenticated
        if (auth()->check()) {
            // Create a new message with the authenticated user's ID
            Message::create([
                'title' => $request->title,
                'body' => $request->body,
                'user_id' => auth()->id(), // Set user_id to the authenticated user's ID
            ]);

            return redirect()->route('messages.index')->with('success', 'Message created successfully.');
        }

        return redirect()->route('messages.index')->with('error', 'User not authenticated.');
    }

    // Display the specified message
    public function show(Message $message)
    {
        return view('messages.show', compact('message'));
    }

    // Show the form for editing the specified message
    public function edit(Message $message)
    {
        return view('messages.edit', compact('message'));
    }

    // Update the specified message in storage
    public function update(Request $request, Message $message)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Update the message
        $message->update($request->all());

        return redirect()->route('messages.index')->with('success', 'Message updated successfully.');
    }

    // Remove the specified message from storage
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'Message deleted successfully.');
    }
}