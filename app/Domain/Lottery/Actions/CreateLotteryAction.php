<?php

namespace App\Domain\Lottery\Actions;

use App\Contracts\Action;
use App\Domain\Lottery\Models\LotteryResults;
use Illuminate\Database\Eloquent\Model;

class CreateLotteryAction implements Action
{
    public static function execute(?array $data = null): Model|LotteryResults
    {
        $fingerPrint = LotteryResults::generateFingerPrint(implode(', ', $data));

        return LotteryResults::query()->updateOrCreate(
            [
                'finger_print' => $fingerPrint,
            ],
            [
                'lottery' => $data['lottery'],
                'date' => $data['date'],
                'result' => $data['result'],
                'series' => $data['series'],
                'finger_print' => $fingerPrint,
            ]
        );
    }
}
