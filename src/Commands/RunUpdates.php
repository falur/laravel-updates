<?php

declare(strict_types=1);

namespace GianTiaga\LaravelUpdates\Commands;

use Illuminate\Console\Command;

class RunUpdates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run updates from database/updates';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->call(
            'migrate',
            ['--path' => 'database/updates', '--force' => true]
        );
    }
}
