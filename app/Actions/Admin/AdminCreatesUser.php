<?php

namespace App\Actions\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminCreatesUser
{
    public function execute(array $attributes): User
    {
        $user = User::create([
            ...$attributes, 
            'password' => Hash::make('temp_password'),
        ]);

        return $user;
    }
}
