<?php

namespace App\Domain\LotteryResult\Actions;

use App\Contracts\Action;
use App\Domain\LotteryResult\Models\LotteryResults;

class ConsultResultLotteryLocalAction implements Action
{
    public static function execute(?array $data = null): array
    {
        return LotteryResults::query()->whereDate('date', $data['date'])
            ->get()
            ->toArray();
    }
}
