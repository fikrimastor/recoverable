<?php

namespace FikriMastor\Recoverable\Commands;

use Illuminate\Console\Command;

class RecoverableCommand extends Command
{
    public $signature = 'recoverable';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
