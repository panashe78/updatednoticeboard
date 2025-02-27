<?php 
// app/Http/Controllers/SessionController.php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    // Display a listing of the sessions
    public function index()
    {
        $sessions = Session::with('presenter')->get();
        return view('sessions.index', compact('sessions'));
    }

    // Show the form for creating a new session
    public function create()
    {
        return view('sessions.create');
    }

    // Store a newly created session in storage
    public function store(Request $request)
    {
        $request->validate([
            'presenters_id' => 'required|exists:presenters,id',
            'topic' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'location' => 'required|string|max:255',
        ]);

        Session::create($request->all());

        return redirect()->route('sessions.index')->with('success', 'Session created successfully.');
    }

    // Display the specified session
    public function show(Session $session)
    {
        return view('sessions.show', compact('session'));
    }

    // Show the form for editing the specified session
    public function edit(Session $session)
    {
        return view('sessions.edit', compact('session'));
    }

    // Update the specified session in storage
    public function update(Request $request, Session $session)
    {
        $request->validate([
            'presenters_id' => 'required|exists:presenters,id',
            'topic' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'location' => 'required|string|max:255',
        ]);

        $session->update($request->all());

        return redirect()->route('sessions.index')->with('success', 'Session updated successfully.');
    }

    // Remove the specified session from storage
    public function destroy(Session $session)
    {
        $session->delete();
        return redirect()->route('sessions.index')->with('success', 'Session deleted successfully.');
    }
}