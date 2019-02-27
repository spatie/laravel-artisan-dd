<?php

namespace Spatie\ArtisanDd\Test;

use Illuminate\Support\Facades\Artisan;

class DdCommandTest extends TestCase
{
    /** @test */
    public function it_will_not_run_if_the_environment_is_not_local()
    {
        Artisan::call('dd "app()->environment()"');

        $this->seeInConsoleOutput('This command can only run if');
    }
}
