<?php

namespace App\Enum\User;

use App\Http\Traits\Enumerable;

enum Type: string
{
    use Enumerable;

    case ADMIN        = 'admin';
    case REGULAR_USER = 'regular_user';
}
