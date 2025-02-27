<?php

namespace App\Policies;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Menu $menu)
    {
        return $user->restaurant_id === $menu->restaurant_id; // Ensure the user belongs to the restaurant
    }

    public function update(User $user, Menu $menu)
    {
        return $user->restaurant_id === $menu->restaurant_id; // Ensure the user belongs to the restaurant
    }

    public function delete(User $user, Menu $menu)
    {
        return $user->restaurant_id === $menu->restaurant_id; // Ensure the user belongs to the restaurant
    }
}
