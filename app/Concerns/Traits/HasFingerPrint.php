<?php

namespace App\Concerns\Traits;

trait HasFingerPrint
{
    public static function generateFingerPrint(string $values): string
    {
        return md5($values);
    }
}
