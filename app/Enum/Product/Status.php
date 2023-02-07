<?php

namespace App\Enum\Product;

enum Status: string
{
    case AVAILABLE   = 'available';
    case UNAVAILABLE = 'unavailable';
}
