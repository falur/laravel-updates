<?php

declare(strict_types=1);

namespace GianTiaga\LaravelUpdates\Commands;

use Illuminate\Console\Command;

class RollbackUpdates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:rollback';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rollback updates from database/updates';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->call(
            'migrate:rollback',
            ['--path' => 'database/updates']
        );
    }
}
