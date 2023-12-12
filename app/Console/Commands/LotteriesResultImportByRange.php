<?php

namespace App\Console\Commands;

use App\Domain\LotteryResult\Actions\ConsultResultLotteryAction;
use Carbon\Carbon;
use Illuminate\Console\Command;

class LotteriesResultImportByRange extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:lotteries-result-import-by-range';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is responsible for querying and inserting the lottery result into a predefined date range for a predetermined provider.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $startDate = Carbon::create('2020-01-01');
        $endDate = Carbon::create('2023-11-30');

        while ($startDate->lte($endDate)) {

            ConsultResultLotteryAction::execute([
                'date' => $startDate->format('Y-m-d'),
            ]);

            echo $startDate->format('Y-m-d') . PHP_EOL;

            $startDate->addDay();
        }
    }
}
