<?php

namespace Shibomb\FilamentSimpleUserManager\Commands;

use Illuminate\Console\Command;

class FilamentSimpleUserManagerCommand extends Command
{
    public $signature = 'filament-simple-user-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
