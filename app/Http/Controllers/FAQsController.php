<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FAQsController extends Controller
{
    // Display all FAQs for the authenticated user's restaurant
    public function index()
    {
        $faqs = FAQ::where('restaurant_id', Auth::user()->restaurant_id)->get();
        return view('faqs.index', compact('faqs'));
    }

    // Show the form to create a new FAQ
    public function create()
    {
        $restaurants = Restaurant::all(); // Assuming you have a Restaurant model
        return view('faqs.create', compact('restaurants'));
    }

    // Store a new FAQ
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:1000',
        ]);

        FAQ::create($validatedData);

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully.');
    }

    // Show the form to edit an FAQ
    public function edit(FAQ $faq)
    {
        $restaurants = Restaurant::all();
        return view('faqs.edit', compact('faq', 'restaurants'));
    }

    // Update an existing FAQ
    public function update(Request $request, FAQ $faq)
    {
        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:1000',
        ]);

        $faq->update($validatedData);

        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    // Delete an FAQ
    public function destroy(FAQ $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
