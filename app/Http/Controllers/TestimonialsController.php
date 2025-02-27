<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // Import the trait

class TestimonialsController extends Controller
{
    use AuthorizesRequests; // Use the trait for authorization

    // Display all testimonials for the authenticated user's restaurants
    public function index()
    {
        $testimonials = Testimonial::where('user_id', Auth::id())->get();
        return view('testimonials.index', compact('testimonials'));
    }

    // Show the form to create a new testimonial
    public function create()
    {
        $restaurants = Restaurant::all(); // Assuming you have a Restaurant model
        return view('testimonials.create', compact('restaurants'));
    }

    // Store a new testimonial
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required|string|max:1000',
            'restaurant_id' => 'required|exists:restaurants,id',
            'customer_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $validatedData['user_id'] = Auth::id();

        Testimonial::create($validatedData);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    // Show the form to edit a testimonial
    public function edit(Testimonial $testimonial)
    {
        $this->authorize('update', $testimonial); // Authorize update action
        $restaurants = Restaurant::all();
        return view('testimonials.edit', compact('testimonial', 'restaurants'));
    }

    // Update an existing testimonial
    public function update(Request $request, Testimonial $testimonial)
    {
        $this->authorize('update', $testimonial); // Authorize update action

        $validatedData = $request->validate([
            'message' => 'required|string|max:1000',
            'restaurant_id' => 'required|exists:restaurants,id',
            'customer_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $testimonial->update($validatedData);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    // Delete a testimonial
    public function destroy(Testimonial $testimonial)
    {
        $this->authorize('delete', $testimonial); // Authorize delete action
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}