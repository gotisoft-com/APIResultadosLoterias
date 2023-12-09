<?php

namespace App\Domain\Lottery\Actions;

use App\Contracts\Action;
use App\Domain\Lottery\Models\Lottery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreateLotteryAction implements Action
{
    public static function execute(?array $data = null): Lottery|Model
    {
        return Lottery::query()->updateOrCreate(
            [
                'name' => $data['name'],
            ],
            [
                'name' => $data['name'],
                'slug' => Str::slug($data['name']),
            ]
        );
    }
}
