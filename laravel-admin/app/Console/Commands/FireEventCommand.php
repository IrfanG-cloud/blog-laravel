<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\UserCreated;

class FireEventCommand extends Command
{
    protected $signature = 'fire';

    public function handle()
    {
        UserCreated::dispatch('user@user.com');
    }
}
