<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    use HasFactory;
    protected $guarded = [];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class); // Define the relationship
    }
    public function user()
    {
        return $this->belongsTo(User::class); // Define the relationship
    }
    
    protected $casts = [
        'event_date' => 'datetime',
    ];
}
