<?php

namespace App\Policies;

use App\Models\Chef;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChefPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Chef $chef)
    {
        return $user->id === $chef->user_id;
    }

    public function delete(User $user, Chef $chef)
    {
        return $user->id === $chef->user_id;
    }
}
