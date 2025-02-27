<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Restaurant; // Make sure to import the Restaurant model
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // Display all FAQs
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    // Show the form to create a new FAQ
    public function create()
    {
        $restaurants = Restaurant::all();
        return view('faqs.create', compact('restaurants'));
    }

    // Store a new FAQ
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        Faq::create($validatedData);

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully.');
    }

    // Show a specific FAQ
    public function show(Faq $faq)
    {
        return view('faqs.show', compact('faq'));
    }

    // Show the form to edit an FAQ
    public function edit(Faq $faq)
    {
        $restaurants = Restaurant::all();
        return view('faqs.edit', compact('faq', 'restaurants'));
    }

    // Update an existing FAQ
    public function update(Request $request, Faq $faq)
    {
        $validatedData = $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq->update($validatedData);

        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    // Delete an FAQ
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
