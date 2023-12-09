<?php

namespace App\Console\Commands;

use App\Domain\LotteryResult\Actions\ConsultResultLotteryAction;
use Carbon\Carbon;
use Illuminate\Console\Command;

class LotteriesResultByDate extends Command
{
    protected $signature = 'app:lotteries-by-date {date}';

    protected $description = 'This command is responsible for querying and inserting the lottery result of a specific date into the default provider.';

    public function handle(): void
    {
        $this->info('Loading lotteries by date...');

        $date = Carbon::create($this->argument('date'))
            ->format('Y-m-d');

        $results = ConsultResultLotteryAction::execute([
            'date' => $date,
        ]);

        $this->table([
            'lottery',
            'slug',
            'date',
            'result',
            'series',
        ], $results);

        $this->info('Lotteries loaded successfully!');
    }
}
