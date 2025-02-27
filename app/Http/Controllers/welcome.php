<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

class welcome extends Controller
{
    //
    public function index()
    {
        $restaurants = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','restaurant')
                       ->paginate(4);

        $bars = DB::table('restaurants')
            ->where('approval', true)
            ->where('description','bar')
                ->paginate(4);

        $fastfood = DB::table('restaurants')
                    ->where('description','fast food restaurant')
                    ->where('approval', true)
                    ->paginate(4);
        $chilspot = DB::table('restaurants')
                    ->where('approval', true)
                    ->where('description','chilspot')
                    ->paginate(4);

                    
        return view('welcome', [
            'restaurants' => $restaurants,
            'bars' => $bars,
            'fastfood' => $fastfood,
            'chilspot' => $chilspot,
        ]);
    }

    public function show($id)
    {
        $restaurant = DB::table('restaurants')->where('id', $id)->first();

        if (!$restaurant) {
            abort(404); // User not found
        }

        return view('restaurants.show', [
            'restaurant' => $restaurant,
           
        ]);
    }

}
