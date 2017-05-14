<?php

namespace Spatie\ArtisanDd;

use Illuminate\Console\Command;

class DdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dd {code}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the given code and dump the result';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (! $this->isAllowedToRun()) {
            $this->error('This command can only run if the environment variable `ALLOW_DD_COMMAND` is set to `true` or in local environment');

            return;
        }

        eval("dd({$this->argument('code')});");
    }

    protected function isAllowedToRun(): bool
    {
        if (env('ALLOW_DD_COMMAND') === true) {
            return true;
        }

        if (app()->environment('local')) {
            return true;
        }

        return false;
    }
}
