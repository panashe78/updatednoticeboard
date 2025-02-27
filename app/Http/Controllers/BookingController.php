<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // Import this trait

class BookingController extends Controller
{
    use AuthorizesRequests; // Use the trait for authorization

    public function index()
    {
      $bookings =  Booking::where('user_id', Auth::id())->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $restaurants = Restaurant::all();
        return view('bookings.create', compact('restaurants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'time' => 'required',
            'number_of_people' => 'required|integer',
            'date' => 'required|date',
            'restaurant_id' => 'required|exists:restaurants,id',
            'customer_name' => 'required|string',
            'customer_phone' => 'required|string',
            'customer_email' => 'required|email',
            'table_number' => 'required|integer',
            'special_requests' => 'nullable|string',
            'status' => 'required|string',
        ]);

        Booking::create(array_merge($request->all(), ['user_id' => Auth::id()]));

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    public function show(Booking $booking)
    {
        $this->authorize('view', $booking);
        return view('bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $this->authorize('update', $booking);
        $restaurants = Restaurant::all();
        return view('bookings.edit', compact('booking', 'restaurants'));
    }

    public function update(Request $request, Booking $booking)
    {
        $this->authorize('update', $booking);

        $request->validate([
            'time' => 'required',
            'number_of_people' => 'required|integer',
            'date' => 'required|date',
            'restaurant_id' => 'required|exists:restaurants,id',
            'customer_name' => 'required|string',
            'customer_phone' => 'required|string',
            'customer_email' => 'required|email',
            'table_number' => 'required|integer',
            'special_requests' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $booking->update($request->all());
        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

    public function destroy(Booking $booking)
    {
        $this->authorize('delete', $booking);
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}