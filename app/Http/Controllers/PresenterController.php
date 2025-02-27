<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Presenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PresenterController extends Controller
{
    public function create(Event $event)
    {
        return view('presenters.create', compact('event'));
    }

    public function store(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'profile_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle the profile photo upload
        $path = $request->file('profile_photo')->store('presenters', 'public');

        // Create the presenter
        Presenter::create([
            'event_id' => $event->id,
            'name' => $request->name,
            'profile_photo' => $path,
        ]);

        return redirect()->route('events.show', $event->id)->with('success', 'Presenter added successfully.');
    }
}