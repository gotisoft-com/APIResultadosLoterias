<?php

use App\Domain\Lottery\Controllers\Api\LotteryApiController;
use App\Domain\LotteryResult\Controllers\Api\LotteryResultsApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::resource('/results', LotteryResultsApiController::class)
    ->only(['index', 'show']);

Route::resource('/lotteries', LotteryApiController::class)
    ->only(['index']);
