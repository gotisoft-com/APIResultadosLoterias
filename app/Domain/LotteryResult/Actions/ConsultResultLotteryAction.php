<?php

namespace App\Domain\LotteryResult\Actions;

use App\Contracts\Action;
use Carbon\Carbon;
use Mlopez\Supergiros\Supergiros;

class ConsultResultLotteryAction implements Action
{
    public static function execute(?array $data = null): array
    {
        if (is_null($data)) {
            $data = [
                'date' => Carbon::now()->format('Y-m-d'),
            ];
        }

        $results = ConsultResultLotteryLocalAction::execute($data);
        if (count($results) > 0) {
            return $results;
        }

        $results = (new Supergiros())->call(Carbon::create($data['date'])->format('Y-m-d'));

        return self::saveRecord($results);
    }

    private static function saveRecord(array $results): array
    {
        $response = [];

        foreach ($results as $result) {
            $response[] = CreateLotteryResultAction::execute([
                'lottery' => $result['loteria'],
                'date' => $result['fecha'],
                'result' => $result['resultados'],
                'series' => $result['serie'],
            ]);
        }

        return $response;
    }
}
