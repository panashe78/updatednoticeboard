<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    // Specify the fields that can be mass assigned
    protected $fillable = [
        'name',
        'user_id',
        'profile_photo',
        'address',
        'rating',
        'city',
        'phone_number',
        'website',
        'average_price',
        'opening_hours',
        'description',
        'email',
        'view_count',
    ];

    public function events()
    {
        return $this->hasMany(Event::class); // Define the relationship
    }

     
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function booking()
    {
        return $this->hasMany(booking::class);
    }

    
    public function reservations()
    {
        return $this->hasMany(Reservations::class);
    }

    public function testimonials()
    {
        return $this->hasMany(testimonial::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

}