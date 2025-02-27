<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // Import the trait

class ChefsController extends Controller
{
    use AuthorizesRequests; // Use the trait for authorization

    // Display all chefs for the authenticated user's restaurant
    public function index()
    {
        $chefs = Chef::where('user_id', Auth::id())->get();
        return view('chefs.index', compact('chefs'));
    }

    // Show the form to create a new chef
    public function create()
    {
        $restaurants = Restaurant::all(); // Assuming you have a Restaurant model
        return view('chefs.create', compact('restaurants'));
    }

    // Store a new chef
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'profile_photo' => 'nullable|file|image|max:2048',
            'experience' => 'required|string|max:500',
            'restaurant_id' => 'required|exists:restaurants,id',
            'rating' => 'nullable|integer|min:0|max:5',
        ]);

        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('chef_photos', 'public');
            $validatedData['profile_photo'] = $path;
        }

        $validatedData['user_id'] = Auth::id();

        Chef::create($validatedData);

        return redirect()->route('chefs.index')->with('success', 'Chef created successfully.');
    }

    // Show the form to edit a chef
    public function edit(Chef $chef)
    {
        $this->authorize('update', $chef); // Authorize update action
        $restaurants = Restaurant::all();
        return view('chefs.edit', compact('chef', 'restaurants'));
    }

    // Update an existing chef
    public function update(Request $request, Chef $chef)
    {
        $this->authorize('update', $chef); // Authorize update action

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'profile_photo' => 'nullable|file|image|max:2048',
            'experience' => 'required|string|max:500',
            'restaurant_id' => 'required|exists:restaurants,id',
            'rating' => 'nullable|integer|min:0|max:5',
        ]);

        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('chef_photos', 'public');
            $validatedData['profile_photo'] = $path;
        }

        $chef->update($validatedData);

        return redirect()->route('chefs.index')->with('success', 'Chef updated successfully.');
    }

    // Delete a chef
    public function destroy(Chef $chef)
    {
        $this->authorize('delete', $chef); // Authorize delete action
        $chef->delete();
        return redirect()->route('chefs.index')->with('success', 'Chef deleted successfully.');
    }
}