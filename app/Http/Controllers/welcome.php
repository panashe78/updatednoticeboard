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
                       ->where('description','business')
                       ->paginate(8);

        $hrestaurants = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','business')
                       ->where('city','Harare')
                       ->paginate(8);

        $brestaurants = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','business')
                       ->where('city','Bulawayo')
                       ->paginate(8);

        $mrestaurants = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','business')
                       ->where('city','Mutare')
                       ->paginate(8);

        $grestaurants = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','business')
                       ->where('city','Gweru')
                       ->paginate(8);

        $hbars = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','restaurant')
                       ->where('city','Harare')
                       ->paginate(8);

        $mbars = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','restaurant')
                       ->where('city','Mutare')
                       ->paginate(8);

        $bbars = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','restaurant')
                       ->where('city','Bulawayo')
                       ->paginate(8);

        $gbars = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','restaurant')
                       ->where('city','Gweru')
                       ->paginate(8);

        $bars = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','restaurant')
                       ->paginate(8);

        $hbars = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','restaurant')
                       ->where('city','Harare')
                       ->paginate(12);

        $hacco = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','accommodation')
                       ->where('city','Harare')
                       ->paginate(12);

        $macco = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','accommodation')
                       ->where('city','Mutare')
                       ->paginate(8);

        $bacco = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','accommodation')
                       ->where('city','Bulawayo')
                       ->paginate(8);

        $gacco = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','accommodation')
                       ->where('city','Gweru')
                       ->paginate(8);

        $bars = DB::table('restaurants')
                       ->where('approval', true)
                       ->where('description','accommodation')
                       ->paginate(8);

                       
       
                    
        return view('welcome', [
            'restaurants' => $restaurants,
            'bars' => $bars,
            'mrestaurants' => $mrestaurants,
            'hrestaurants' => $hrestaurants,
            'brestaurants' => $brestaurants,
            'grestaurants' => $grestaurants, 
            'hbars' => $hbars,
            'mbars' => $mbars, 
            'bbars' => $bbars,
            'gbars' => $gbars, 
            'hacco' => $hacco,  
            'macco' => $macco,
            'bacco' => $bacco,
            'gacco' => $gacco,


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
