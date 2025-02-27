<?php

namespace App\Policies;

use App\Models\Reservation;
use App\Models\Reservations;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReservationPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Reservations $reservation)
    {
        return $user->id === $reservation->user_id; // Check if the user owns the reservation
    }

    public function update(User $user, Reservations $reservation)
    {
        return $user->id === $reservation->user_id; // Check if the user owns the reservation
    }

    public function delete(User $user, Reservations $reservation)
    {
        return $user->id === $reservation->user_id; // Check if the user owns the reservation
    }
}