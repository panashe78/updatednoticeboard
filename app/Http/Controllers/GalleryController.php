<?php
namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function create(Restaurant $restaurant)
    {
        return view('galleries.create', compact('restaurant'));
    }

    public function store(Request $request, Restaurant $restaurant)
    {
        // Validate inputs
        $request->validate([
            'images.*' => 'nullable|file|image|max:2048', // Allow multiple images
            'videos.*' => 'nullable|file|mimetypes:video/mp4,video/x-msvideo|max:20480', // Allow multiple videos
        ]);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                $restaurant->images()->create(['file_path' => $path]);
            }
        }

        // Handle video uploads
        if ($request->hasFile('videos')) {
            foreach ($request->file('videos') as $video) {
                $path = $video->store('videos', 'public');
                $restaurant->videos()->create(['file_path' => $path]);
            }
        }

        return redirect()->route('restaurants.index')->with('success', 'Gallery updated successfully.');
    }
}