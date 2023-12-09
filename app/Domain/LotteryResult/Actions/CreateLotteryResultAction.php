<?php

namespace App\Domain\LotteryResult\Actions;

use App\Contracts\Action;
use App\Domain\LotteryResult\Models\LotteryResults;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreateLotteryResultAction implements Action
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
                'slug' => Str::slug($data['lottery']),
            ]
        );
    }
}
