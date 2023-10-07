<?php

namespace Soap\AdminFortify\Commands;

use Illuminate\Console\Command;

class AdminFortifyCommand extends Command
{
    public $signature = 'admin-fortify:install';

    public $description = 'Install Admin-Fortify package';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
