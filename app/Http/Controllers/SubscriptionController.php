<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email|exists:users,email', // Ensure the email exists
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // Update the subscribed status
            $user->subscribed = true; // or false if you want to unsubscribe
            $user->save();

            return redirect()->back()->with('success', 'You have successfully subscribed.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }
}