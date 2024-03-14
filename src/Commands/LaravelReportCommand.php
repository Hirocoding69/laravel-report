<?php

namespace TengSambo\LaravelReport\Commands;

use Illuminate\Console\Command;

class LaravelReportCommand extends Command
{
    public $signature = 'laravel-report';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
