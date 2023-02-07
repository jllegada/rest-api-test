<?php

namespace App\Enum\User;

enum Verification: string
{
    case VERIFIED   = '1';
    case UNVERIFIED = '0';
}
