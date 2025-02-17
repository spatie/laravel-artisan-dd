<?php

use Illuminate\Support\Facades\Artisan;

it('will not run if the environment is not local', function () {
    Artisan::call('dd "app()->environment()"');

    expect('This command can only run if')->toSeeInConsoleOutput();
});
