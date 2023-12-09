<?php

namespace App\Contracts;

interface Action
{
    public static function execute(?array $data = null): mixed;
}
