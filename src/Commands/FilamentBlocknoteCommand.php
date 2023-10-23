<?php

namespace Jubeki\FilamentBlocknote\Commands;

use Illuminate\Console\Command;

class FilamentBlocknoteCommand extends Command
{
    public $signature = 'filament-blocknote';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
