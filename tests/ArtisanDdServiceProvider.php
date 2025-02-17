<?php

namespace Spatie\ArtisanDd\Test;

use Illuminate\Support\ServiceProvider;
use Spatie\ArtisanDd\DdCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ArtisanDdServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('artisan-dd')
            ->hasCommand(DdCommand::class);
    }
}
