<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Display a listing of the events
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    // Show the form for creating a new event
    public function create()
    {
        return view('events.create');
    }

    // Store a newly created event in storage
    public function store(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'description' => 'required|string',
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'user_id' => 'required|exists:users,id',
        ]);

        // Handle file upload
        $profilePhotoPath = $request->file('profile_photo')->store('event_photos', 'public');

        Event::create([
            'restaurant_id' => $request->restaurant_id,
            'event_name' => $request->event_name,
            'event_date' => $request->event_date,
            'description' => $request->description,
            'profile_photo' => $profilePhotoPath,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    // Display the specified event
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    // Show the form for editing the specified event
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    // Update the specified event in storage
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'description' => 'required|string',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($request->hasFile('profile_photo')) {
            // Handle file upload
            $profilePhotoPath = $request->file('profile_photo')->store('event_photos', 'public');
            $event->profile_photo = $profilePhotoPath;
        }

        $event->update($request->only('restaurant_id', 'event_name', 'event_date', 'description', 'user_id'));

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    // Remove the specified event from storage
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
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