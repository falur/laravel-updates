<?php

namespace GianTiaga\LaravelUpdates\Commands;

use Illuminate\Console\Command;

class MakeUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:make {name : The name of the migration}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create update migration file';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->call('make:migration', [
            'name' => $this->input->getArgument('name'),
            '--path' => 'database/updates',
        ]);
    }
}
