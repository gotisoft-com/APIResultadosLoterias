<?php

namespace App\Domain\Lottery\Actions;

use App\Contracts\Action;
use App\Domain\Lottery\Models\LotteryResults;

class ConsultResultLotteryLocalAction implements Action
{
    public static function execute(?array $data = null): array
    {
        return LotteryResults::query()->whereDate('date', $data['date'])
            ->get()
            ->toArray();
    }
}
