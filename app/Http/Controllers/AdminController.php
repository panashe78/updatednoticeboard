<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Chef;
use App\Models\Event;
use App\Models\FAQ;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Reservations;
use App\Models\Restaurant;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function userStatistics()
    {
        // Example: Count users by month
        $userCounts = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                          ->groupBy('month')
                          ->orderBy('month')
                          ->get();
    
        $totalRestaurantsCount = Restaurant::count();
        $totalEventsCount = Event::count();
        $totalUsersCount = User::count();
        $totalFaqsCount = FAQ::count();
        $totalChefsCount = Chef::count();
        $totalTestimonialsCount = Testimonial::count();
        $totalReservationsCount = Reservations::count();
        $totalBookingsCount = booking::count();
        $totalMenusCount = Menu::count();
        $firstTenUsers = User::take(10)->get();
        $totalMessages = Message::count();
        
        $restaurants = DB::table('restaurants')
          
            ->where('approval', false)
            ->orderBy('views', 'desc') // Order by views in descending order
            ->get();
    
        // Fetch all messages
        $messages = Message::with('user')->latest()->get(); // Assuming you want the latest messages with user info
    
        $restaurantCounts = Restaurant::selectRaw('city, COUNT(*) as count')
                                      ->groupBy('city')
                                      ->get();
    
        // Count menu items by category
        $menuCounts = Menu::selectRaw('category, COUNT(*) as count')
                          ->groupBy('category')
                          ->get();
    
        $averageRatings = Testimonial::selectRaw('restaurant_id, AVG(rating) as average_rating')
                                      ->groupBy('restaurant_id')
                                      ->get();
    
        $averageChefRatings = Chef::selectRaw('restaurant_id, AVG(rating) as average_rating')
                                  ->groupBy('restaurant_id')
                                  ->get();
    
        // Fetch event counts by restaurant with names
        $eventCounts = Event::selectRaw('restaurants.name as restaurant_name, COUNT(*) as count')
                            ->join('restaurants', 'events.restaurant_id', '=', 'restaurants.id')
                            ->groupBy('restaurants.name')
                            ->get();
    
        // Fetch FAQ counts by restaurant with names
        $faqCounts = FAQ::selectRaw('restaurants.name as restaurant_name, COUNT(*) as count')
                        ->join('restaurants', 'f_a_q_s.restaurant_id', '=', 'restaurants.id')
                        ->groupBy('restaurants.name')
                        ->get();
    
        // Fetch reservation counts by restaurant with names
        $reservationCounts = Reservations::selectRaw('restaurants.name as restaurant_name, COUNT(*) as count')
                                         ->join('restaurants', 'reservations.restaurant_id', '=', 'restaurants.id')
                                         ->groupBy('restaurants.name')
                                         ->get();

                                         $events = Event::orderBy('event_date', 'desc')->get(); //
        return view('admin.dashboard', [
            'userCounts' => $userCounts,
            'restaurantCounts' => $restaurantCounts,
            'menuCounts' => $menuCounts,
            'averageRatings' => $averageRatings,
            'averageChefRatings' => $averageChefRatings,
            'eventCounts' => $eventCounts,
            'faqCounts' => $faqCounts,
            'reservationCounts' => $reservationCounts,
            'totalRestaurantsCount' => $totalRestaurantsCount,
            'totalEventsCount' => $totalEventsCount,
            'totalUsersCount' => $totalUsersCount,
            'totalFaqsCount' => $totalFaqsCount,
            'totalChefsCount' => $totalChefsCount,
            'totalTestimonialsCount' => $totalTestimonialsCount,
            'totalReservationsCount' => $totalReservationsCount,
            'totalBookingsCount' => $totalBookingsCount,
            'totalMenusCount' => $totalMenusCount,
            'firstTenUsers' => $firstTenUsers,
            'totalMessages' => $totalMessages,
            'messages' => $messages, // Pass messages to the view
            'restaurants' => $restaurants,
            'events' => $events,
        ]);
    }

    
    
}