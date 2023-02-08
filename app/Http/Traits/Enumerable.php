<?php

namespace App\Http\Traits;

trait Enumerable
{
    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}
