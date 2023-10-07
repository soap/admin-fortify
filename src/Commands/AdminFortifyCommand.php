<?php

namespace Soap\AdminFortify\Commands;

use Illuminate\Console\Command;

class AdminFortifyCommand extends Command
{
    public $signature = 'admin-fortify';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
