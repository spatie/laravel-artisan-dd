<?php

namespace Spatie\ArtisanDd\Test;

use Spatie\ArtisanDd\DdCommand;
use Illuminate\Support\ServiceProvider;

class ArtisanDdServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('command.dd', DdCommand::class);

        $this->commands(['command.dd']);
    }
}
