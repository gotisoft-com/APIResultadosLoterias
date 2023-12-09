<?php

namespace App\Console;

use App\Jobs\ProcessLotteryReload;
use App\Jobs\ProcessLotteryResults;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->job(ProcessLotteryResults::class)
            ->everyTenMinutes();

        $schedule->job(ProcessLotteryReload::class)
            ->dailyAt('00:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
