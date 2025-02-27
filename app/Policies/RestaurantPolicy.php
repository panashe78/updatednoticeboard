<?php

namespace App\Policies;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RestaurantPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Restaurant $restaurant)
    {
        return $user->id === $restaurant->user_id; // Check if the user owns the restaurant
    }

    public function delete(User $user, Restaurant $restaurant)
    {
        return $user->id === $restaurant->user_id; // Check if the user owns the restaurant
    }
}