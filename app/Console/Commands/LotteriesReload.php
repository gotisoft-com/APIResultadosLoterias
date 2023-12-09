<?php

namespace App\Console\Commands;

use App\Domain\Lottery\Actions\CreateLotteryAction;
use App\Domain\Lottery\Actions\ListLotteryAction;
use Illuminate\Console\Command;

class LotteriesReload extends Command
{
    protected $signature = 'app:lotteries-reload';

    protected $description = 'This command is responsible for grouping the lotteries that are in the results table and inserting them into the master lottery table.';

    public function handle(): void
    {
        $this->info('Reloading lotteries...');

        $lotteries = ListLotteryAction::execute();
        $allLotteries = collect();

        foreach ($lotteries as $lottery) {
            $allLotteries->add(CreateLotteryAction::execute([
                'name' => $lottery,
            ]));
        }

        $this->table(['id', 'Lotteries', 'created_at', 'updated_at'], $allLotteries);

        $this->info('Lotteries reloaded successfully!');
    }
}
