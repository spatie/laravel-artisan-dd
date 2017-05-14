<?php

namespace Spatie\ArtisanDd\Test;

use Event;
use Illuminate\Support\Facades\Artisan;
use Orchestra\Testbench\TestCase as Orchestra;
use Illuminate\Console\Application as ConsoleApplication;
use Spatie\ArtisanDd\ArtisanDdServiceProvider;
use Spatie\ArtisanDd\DdCommand;

abstract class TestCase extends Orchestra
{
    public function setUp()
    {
        parent::setUp();

    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ArtisanDdServiceProvider::class,
        ];
    }

    /**
     * @param string|array $searchStrings
     */
    protected function seeInConsoleOutput($searchStrings)
    {
        if (! is_array($searchStrings)) {
            $searchStrings = [$searchStrings];
        }

        $output = Artisan::output();

        foreach ($searchStrings as $searchString) {
            $this->assertContains((string) $searchString, $output);
        }
    }
}
