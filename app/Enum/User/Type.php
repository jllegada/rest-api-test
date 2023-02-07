<?php

namespace App\Enum\User;

enum Type: string
{
    case ADMIN        = 'admin';
    case REGULAR_USER = 'regular_user';
}
