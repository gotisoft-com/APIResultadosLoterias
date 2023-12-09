<?php

namespace App\Domain\Lottery\Actions;

use App\Contracts\Action;
use App\Domain\Lottery\Models\Lottery;

class ListLotteryAction implements Action
{
    public static function execute(?array $data = null): array
    {
        return Lottery::query()
            ->get()
            ->toArray();
    }
}
