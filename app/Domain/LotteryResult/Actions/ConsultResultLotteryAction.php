<?php

namespace App\Domain\LotteryResult\Actions;

use App\Contracts\Action;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Mlopez\Supergiros\Supergiros;

class ConsultResultLotteryAction implements Action
{
    public static function execute(?array $data = null): array|Collection
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

    private static function saveRecord(array $results): array|Collection
    {
        $response = collect();

        foreach ($results as $result) {
            $response->add(CreateLotteryResultAction::execute([
                'lottery' => $result['loteria'],
                'date' => $result['fecha'],
                'result' => $result['resultados'],
                'series' => $result['serie'],
            ]));
        }

        return $response;
    }
}
