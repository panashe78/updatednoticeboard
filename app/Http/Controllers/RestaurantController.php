<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; 
use App\Models\Restaurant;
use App\Models\User;
use App\Mail\NewRestaurantAdded; // Import the Mailable class
use App\Models\Chef;
use App\Models\Event;
use App\Models\Image;
use App\Models\menu;
use App\Models\testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // Import the trait

class RestaurantController extends Controller
{
    use AuthorizesRequests; // Use the trait for authorization

    
    public function index()
    {
        // Fetch restaurants ordered by views, paginated
        $restaurants = DB::table('restaurants')
            ->where('description', 'restaurant')
            ->where('approval', true)
            ->orderBy('views', 'desc') // Order by views in descending order
            ->paginate(10);
    
        // Fetch bars ordered by views, paginated
        $bars = DB::table('restaurants')
            ->where('description', 'bar')
            ->where('approval', true)
            ->orderBy('views', 'desc') // Order by views in descending order
            ->paginate(10);
    
        // Fetch fast food restaurants ordered by views, paginated
        $fastfood = DB::table('restaurants')
            ->where('approval', true)
            ->where('description', 'fast food restaurant')
            ->orderBy('views', 'desc') // Order by views in descending order
            ->paginate(10);
    
        // Fetch chilspots ordered by views, paginated
        $chilspot = DB::table('restaurants')
            ->where('approval', true)
            ->where('description', 'chilspot')
            ->orderBy('views', 'desc') // Order by views in descending order
            ->paginate(10);

            $toprestaurants = DB::table('restaurants')
            ->where('description', 'restaurant')
            ->orderBy('views', 'desc') // Order by views in descending order
            ->paginate(4);
    
        // Fetch bars ordered by views, paginated
        $topbars = DB::table('restaurants')
            ->where('description', 'bar')
            ->orderBy('views', 'desc') // Order by views in descending order
            ->paginate(4);
    
        // Fetch fast food restaurants ordered by views, paginated
        $topfastfood = DB::table('restaurants')
            ->where('description', 'fast food restaurant')
            ->orderBy('views', 'desc') // Order by views in descending order
            ->paginate(4);
    
        // Fetch chilspots ordered by views, paginated
        $topchilspot = DB::table('restaurants')
            ->where('description', 'chilspot')
            ->orderBy('views', 'desc') // Order by views in descending order
            ->paginate(4);
    
        return view('restaurants.index', [
            'restaurants' => $restaurants,
            'bars' => $bars,
            'fastfood' => $fastfood,
            'chilspot' => $chilspot,
            'toprestaurants' => $toprestaurants,
            'topbars' => $topbars,
            'topfastfood' => $topfastfood,
            'topchilspot' => $topchilspot,
        ]);
    }
    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
{
    // Validate inputs
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'profile_photo' => 'required|file|image|max:2048', // Ensure it's an image file
        'address' => 'required|string', // This is now a cuisine type
        'rating' => 'required|integer|min:1|max:5',
        'city' => 'required|string|max:100',
        'phone_number' => 'required|string|max:15',
        'website' => 'nullable|string|max:255',
        'average_price' => 'required|integer',
        'opening_hours' => 'required|date_format:H:i',
        'description' => 'required|string',
        'category' => 'required|string',
        'email' => 'required|email|max:255',
    ]);

    // Handle file upload for profile photo
    if ($request->hasFile('profile_photo')) {
        $path = $request->file('profile_photo')->store('profile_photos', 'public');
        $validatedData['profile_photo'] = $path;
    }

    // Create a restaurant with the authenticated user's ID
    $restaurant = Restaurant::create(array_merge($validatedData, ['user_id' => Auth::id()]));

    // Get subscribed users' email addresses
    $subscribedUsers = User::where('subscribed', true)->pluck('email');

    // Send an email to each subscribed user
    //foreach ($subscribedUsers as $email) {
        //Mail::to($email)->send(new NewRestaurantAdded($restaurant));
    //}


    Mail::to('panashemwamadi78@gmail.com')->send(new NewRestaurantAdded($restaurant));
    return redirect()->route('restaurants.index')->with('success', 'Restaurant created successfully and emails sent.');
}

public function show(Restaurant $restaurant)
{
    // Increment the view_count for the restaurant
    $restaurant->increment('views');

    // Fetch related data
    $restaurants = Restaurant::all();
    
    $menus = Menu::with('user')
        ->where('restaurant_id', $restaurant->id)
        ->where('category', 'dessert')
        ->get();
    $appertizer = Menu::with('user')
        ->where('restaurant_id', $restaurant->id)
        ->where('category', 'appertizer')
        ->get();
    $breakfast = Menu::with('user')
        ->where('restaurant_id', $restaurant->id)
        ->where('category', 'breakfast')
        ->get();
    $dinner = Menu::with('user')
        ->where('restaurant_id', $restaurant->id)
        ->where('category', 'dinner')
        ->get();
    $supper = Menu::with('user')
        ->where('restaurant_id', $restaurant->id)
        ->where('category', 'supper')
        ->get();

    $chef = Chef::with('user')->where('restaurant_id', $restaurant->id)->get();
    $testimonial = testimonial::with('user')->where('restaurant_id', $restaurant->id)->get();
    $event = Event::with('user')->where('restaurant_id', $restaurant->id)->get();
    $images = Image::with('user')->where('restaurant_id', $restaurant->id)->get();

    return view('restaurants.show', compact('restaurant', 'restaurants', 'testimonial', 'chef', 'event', 'images', 'menus', 'appertizer', 'breakfast', 'dinner', 'supper'));
}
    public function edit(Restaurant $restaurant)
    {
        $this->authorize('update', $restaurant); // Authorize update action
        return view('restaurants.edit', compact('restaurant'));
    }

    public function update(Request $request, Restaurant $restaurant)
    {
    

        // Authorize the request
        $this->authorize('update', $restaurant); // Authorize update action

        // Validate inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'profile_photo' => 'required|file|image|max:2048', // Ensure it's an image file
            'address' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'city' => 'required|string|max:100',
            'phone_number' => 'required|string|max:15',
            'website' => 'nullable|string|max:255',
            'average_price' => 'required|integer',
            'opening_hours' => 'required|date_format:H:i',
            'description' => 'required|string',
            'category' => 'required',
            'email' => 'required|email|max:255',
        ]);

        // Handle file upload for profile photo
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
            $validatedData['profile_photo'] = $path;
        }

        // Update the restaurant with the validated data
        $restaurant->update($validatedData);

        // Redirect back with success message
        return redirect()->route('restaurants.index')->with('success', 'Restaurant updated successfully.');
    }

    public function destroy(Restaurant $restaurant)
    {
        $this->authorize('delete', $restaurant); // Authorize delete action
        $restaurant->delete();
        return redirect()->route('restaurants.index')->with('success', 'Restaurant deleted successfully.');
    }

    public function search(Request $request)
    {
        $query = Restaurant::query();

        // Search by restaurant name
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        // Search by cuisine type
        if ($request->filled('cuisine')) {
            $query->where('address', $request->cuisine);
        }

        // Search by rating
        if ($request->filled('rating')) {
            $query->where('rating', '>=', $request->rating);
        }

        // Search by city
        if ($request->filled('city')) {
            $query->where('city', 'like', '%' . $request->city . '%');
        }

        // Execute the query
        $restaurant = $query->get();

        // Return the results to the view
        return view('restaurants.indexs', compact('restaurant'));
    }


    public function approve($id)
    {
        $restaurant = Restaurant::find($id);

        if ($restaurant) {
            $restaurant->approval = true; // Assuming you have an 'approved' field
            $restaurant->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }

    public function approveevent($id)
    {
        $event = Event::find($id);

        if ($event) {
            $event->approval = true; // Assuming you have an 'approved' field
            $event->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }
}
