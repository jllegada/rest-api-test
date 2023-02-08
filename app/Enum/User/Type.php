<?php

namespace App\Enum\User;

use App\Http\Traits\Enum;

enum Type: string
{
    use Enum;

    case ADMIN        = 'admin';
    case REGULAR_USER = 'regular_user';
}
