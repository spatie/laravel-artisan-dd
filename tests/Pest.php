<?php

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Artisan;

uses(Spatie\ArtisanDd\Test\TestCase::class)->in('.');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
*/

expect()->extend('toSeeInConsoleOutput', function () {
    /** @var string|array */
    $searchStrings = $this->value;

    if (! is_array($searchStrings)) {
        $searchStrings = [$searchStrings];
    }

    $output = Artisan::output();

    foreach ($searchStrings as $searchString) {
        expect($output)->toContain((string) $searchString);
    }
});
