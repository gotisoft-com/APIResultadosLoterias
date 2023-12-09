<?php

namespace Domain\Lottery\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LotteryResultsApiControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_view_index(): void
    {
        $response = $this->getJson(route('api.lottery.results.index'));
        dd($response);
    }
}
