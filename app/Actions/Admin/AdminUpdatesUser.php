<?php

namespace App\Actions\Admin;

use App\Models\User;

class AdminUpdatesUser
{
    public function execute(User $user, array $attributes): User
    {
        $user->update($attributes);

        return $user;
    }
}
