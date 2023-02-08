<?php

namespace App\Http\Traits;

trait Enum
{
    public static function getValues():array
    {
        return array_column(self::cases(), 'value');
    }
}
