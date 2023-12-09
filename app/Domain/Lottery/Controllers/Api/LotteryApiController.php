<?php

namespace App\Domain\Lottery\Controllers\Api;

use App\Domain\Lottery\Actions\ListLotteryAction;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class LotteryApiController extends Controller
{
    public function index(): ResponseFactory|Response|JsonResponse
    {
        try {
            $results = ListLotteryAction::execute();

            return jsend_success($results);
        } catch (\Exception $e) {
            return jsend_error($e->getMessage());
        }
    }
}
