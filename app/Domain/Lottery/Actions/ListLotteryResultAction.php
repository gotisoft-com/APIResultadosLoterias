<?php

namespace App\Domain\Lottery\Actions;

use App\Contracts\Action;
use App\Domain\LotteryResult\Models\LotteryResults;

class ListLotteryResultAction implements Action
{
    public static function execute(?array $data = null): array
    {
        return LotteryResults::query()->groupBy('lottery')
            ->pluck('lottery')
            ->toArray();
    }
}
