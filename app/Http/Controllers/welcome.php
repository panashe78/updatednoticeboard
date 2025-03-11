<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

class welcome extends Controller
{

    public function index()
{
    // Redirect to the welcome page
    return redirect()->route('welcome'); // Assuming 'welcome' is the name of your welcome route
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
