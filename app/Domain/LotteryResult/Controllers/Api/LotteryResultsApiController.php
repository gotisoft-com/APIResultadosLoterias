<?php

namespace App\Domain\LotteryResult\Controllers\Api;

use App\Domain\LotteryResult\Actions\ConsultResultLotteryAction;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Contracts\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class LotteryResultsApiController extends Controller
{
    public function index(): ResponseFactory|Response
    {
        try {
            $results = ConsultResultLotteryAction::execute();

            return jsend_success($results);
        } catch (\Exception $e) {
            return jsend_error($e->getMessage());
        }
    }

    public function show(string $date): ResponseFactory|Response
    {
        try {
            $results = ConsultResultLotteryAction::execute([
                'date' => Carbon::create($date)->format('Y-m-d'),
            ]);

            return jsend_success($results);
        } catch (\Exception $e) {
            return jsend_error($e->getMessage());
        }
    }
}
