<?php

namespace App\Http\Controllers;

use App\Mail\NewEventCreated;
use App\Models\Event;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    // Display all events for the authenticated user's restaurant
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    // Show the form to create a new event
    public function create()
    {
        $restaurants = Restaurant::all(); // Assuming you have a Restaurant model
        return view('events.create', compact('restaurants'));
    }

    // Store a new event
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'category' => 'required|string',
            'price' => 'required',

            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Set the user_id when creating the event
        $validatedData['user_id'] = Auth::id();

        // Handle file upload
        $validatedData['profile_photo'] = $request->file('profile_photo')->store('event_photos', 'public');

        // Create the event
        $event = Event::create($validatedData);

        // Get subscribed users' email addresses (assuming you have a subscription mechanism)
        $subscribedUsers = User::where('subscribed', true)->pluck('email');

        // Send an email to each subscribed user
        foreach ($subscribedUsers as $email) {
            Mail::to($email)->send(new NewEventCreated($event));
        }

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    // Show the form to edit an event
    public function edit(Event $event)
    {
        $restaurants = Restaurant::all();
        return view('events.edit', compact('event', 'restaurants'));
    }

    // Update an existing event
    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'category' => 'required|string',
            'price' => 'required',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle profile photo upload if provided
        if ($request->hasFile('profile_photo')) {
            // Delete the old photo if it exists
            if ($event->profile_photo) {
                Storage::disk('public')->delete($event->profile_photo);
            }
            // Store the new photo
            $validatedData['profile_photo'] = $request->file('profile_photo')->store('event_photos', 'public');
        }

        $event->update($validatedData);

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    // Delete an event
    public function destroy(Event $event)
    {
        // Delete the profile photo from storage if it exists
        if ($event->profile_photo) {
            Storage::disk('public')->delete($event->profile_photo);
        }

        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }

    // Show a specific event
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function approve($id)
    {
        $event = Event::find($id);

        if ($event) {
            $event->approved = true; // Assuming you have an 'approved' field
            $event->save();

            return redirect()->back()->with('success', 'Event approved successfully!');
        }

        return redirect()->back()->with('error', 'Event not found.');
    }

    public function reject($id)
    {
        $event = Event::find($id);

        if ($event) {
            // Logic for rejecting the event (e.g., setting a rejected field)
            return redirect()->back()->with('success', 'Event rejected successfully!');
        }

        return redirect()->back()->with('error', 'Event not found.');
    }
}