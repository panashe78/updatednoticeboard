<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Reservations;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // Import the trait

class ReservationsController extends Controller
{
    use AuthorizesRequests; // Use the trait for authorization

    // Display all reservations for the authenticated user
    public function index()
    {
        $reservations = Reservations::all(); // Ensure the model name is correct
        return view('reservations.index', compact('reservations'));
    }

    // Show the form to create a new reservation
    public function create()
    {
        $restaurants = Restaurant::all(); // Assuming you have a Restaurant model
        return view('reservations.create', compact('restaurants'));
    }

    // Store a new reservation
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required|date_format:H:i',
            'guest_count' => 'required|integer|min:1',
            'special_requests' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:50',
        ]);

        // Set the user_id for the reservation
        $validatedData['user_id'] = Auth::id();

        Reservations::create($validatedData); // Ensure the model name is correct

        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    }

    // Show a specific reservation
    public function show(Reservations $reservation)
    {
        // Authorize view action
        return view('reservations.show', compact('reservation'));
    }

    // Show the form to edit a reservation
    public function edit(Reservations $reservation)
    {
        $this->authorize('update', $reservation); // Authorize update action
        $restaurants = Restaurant::all();
        return view('reservations.edit', compact('reservation', 'restaurants'));
    }

    // Update an existing reservation
    public function update(Request $request, Reservations $reservation)
    {
        $this->authorize('update', $reservation); // Authorize update action

        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required|date_format:H:i',
            'guest_count' => 'required|integer|min:1',
            'special_requests' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:50',
        ]);

        $reservation->update($validatedData);

        return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully.');
    }

    // Delete a reservation
    public function destroy(Reservations $reservation)
    {
        $this->authorize('delete', $reservation); // Authorize delete action
        $reservation->delete();
        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully.');
    }
}