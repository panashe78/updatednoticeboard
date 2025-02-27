<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Event;
use App\Models\FAQ;
use App\Models\menu;
use App\Models\Message;
use App\Models\Reservations;
use App\Models\Restaurant;
use App\Models\testimonial;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    //

    public function index()
    {
        $resorts = Restaurant::all();
        $booking = booking::count();
        $events = Event::count();
        $mesages = Message::count();
        $menu = menu::count();
        $reservations = Reservations::count();
        $restaurants = Restaurant::count();
        $testimonials = testimonial::count();
        $questions = FAQ::count();
        


        return view('dashboard', [
            'booking' => $booking,
            'events' => $events,
            'mesages' => $mesages,
            'menu' => $menu,
            'reservations' => $reservations,
            'restaurants' => $restaurants,
            'testimonials' => $testimonials,
            'questions' => $questions,
            'resorts' => $resorts,
           
        ]);
    }

}
