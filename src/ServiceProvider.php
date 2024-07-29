<?php

declare(strict_types=1);

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->commands([
            \GianTiaga\LaravelUpdates\Commands\MakeUpdate::class,
            \GianTiaga\LaravelUpdates\Commands\RunUpdates::class,
            \GianTiaga\LaravelUpdates\Commands\RollbackUpdates::class,
        ]);
    }
}
