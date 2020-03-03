<?php

namespace Spatie\ArtisanDd\Test;

use Illuminate\Support\ServiceProvider;
use Spatie\ArtisanDd\DdCommand;

class ArtisanDdServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('command.dd', DdCommand::class);

        $this->commands(['command.dd']);
    }
}
