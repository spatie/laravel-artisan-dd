<?php

namespace Spatie\ArtisanDd;

use Illuminate\Support\ServiceProvider;
use Spatie\UptimeMonitor\Commands\SyncFile;
use Spatie\UptimeMonitor\Commands\CheckUptime;
use Spatie\UptimeMonitor\Commands\ListMonitors;
use Spatie\UptimeMonitor\Commands\CreateMonitor;
use Spatie\UptimeMonitor\Commands\DeleteMonitor;
use Spatie\UptimeMonitor\Commands\EnableMonitor;
use Spatie\UptimeMonitor\Commands\DisableMonitor;
use Spatie\UptimeMonitor\Commands\CheckCertificates;
use Spatie\UptimeMonitor\Notifications\EventHandler;
use Spatie\UptimeMonitor\Helpers\UptimeResponseCheckers\UptimeResponseChecker;

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
