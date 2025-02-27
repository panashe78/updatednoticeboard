<?php

namespace App\Http\Controllers;

use App\Mail\NewMenuItemCreated;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // Import the trait

class MenuController extends Controller
{
    use AuthorizesRequests; // Use the trait for authorization

    // Display all menu items for the authenticated user's restaurant
    public function index()
    {
        $menuItems = Menu::all(); // Assuming each user has a restaurant
        return view('menus.index', compact('menuItems'));
    }

    // Show the form to create a new menu item
    public function create()
    {
        $restaurants = Restaurant::all();
        return view('menus.create', compact('restaurants'));
    }

    // Store a new menu item
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'restaurant_id' => 'required|exists:restaurants,id',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'quantity' => 'required|integer',
        'category' => 'required|string',
        'availability' => 'nullable|boolean',
        'spicy_level' => 'required|integer|min:0|max:5',
    ]);

    // Handle file upload
    if ($request->hasFile('photo')) {
        $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
        $request->file('photo')->storeAs('photos', $filename, 'public');
        $validatedData['photo'] = $filename;
    }

    // Set the user_id and create the menu item
    $validatedData['user_id'] = Auth::id();
    $menuItem = Menu::create($validatedData);

    // Get subscribed users' email addresses
    $subscribedUsers = User::where('subscribed', true)->pluck('email');

    // Send an email to each subscribed user
    foreach ($subscribedUsers as $email) {
        Mail::to($email)->send(new NewMenuItemCreated($menuItem));
    }

    return redirect()->route('menus.index')->with('success', 'Menu item created successfully and emails sent.');
}
    // Show a specific menu item
    public function show(Menu $menu)
    {
         // Authorize view action
        return view('menus.show', compact('menu'));
    }

    // Show the form to edit a menu item
    public function edit(Menu $menu)
    {
        $this->authorize('update', $menu); // Authorize update action
        $restaurants = Restaurant::all();
        return view('menus.edit', compact('menu', 'restaurants'));
    }

    // Update an existing menu item
    public function update(Request $request, Menu $menu)
    {
        $this->authorize('update', $menu); // Authorize update action

        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quantity' => 'required|integer',
            'category' => 'required|string',
            'availability' => 'nullable|boolean',
            'spicy_level' => 'required|integer|min:0|max:5',
        ]);

        // Handle file upload if a new photo is provided
        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('photos', $filename, 'public');
            $validatedData['photo'] = $filename;
        }

        // Update the menu item
        $menu->update($validatedData);

        return redirect()->route('menus.index')->with('success', 'Menu item updated successfully.');
    }

    // Delete a menu item
    public function destroy(Menu $menu)
    {
        $this->authorize('delete', $menu); // Authorize delete action
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu item deleted successfully.');
    }
}