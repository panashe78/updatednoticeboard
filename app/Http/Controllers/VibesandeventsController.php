<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VibesandeventsController extends Controller
{
    //
    public function index()
    {
        $culture = DB::table('events')
                       ->where('category','Cultural Festival')
                       ->where('approved',true)
                       ->paginate(3);
        $live = DB::table('events')
                       ->where('category','Live Music Show')
                       ->where('approved',true)
                       ->paginate(3);
        $night = DB::table('events')
                     ->where('category','Nightlife')
                     ->where('approved',true)
                     ->paginate(3);
        
        return view('vibesandevents', [
            'culture' => $culture,
            'live' => $live,
            'night' => $night,
        ]);
    }
}
