<?php
namespace App\Mail;

use App\Models\Restaurant;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewRestaurantAdded extends Mailable
{
    use SerializesModels;

    public $restaurant;

    public function __construct(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
    }

    public function build()
    {
        return $this->subject('New Restaurant Added!')
                    ->view('emails.new_restaurant_added'); // Define the email view
    }
}