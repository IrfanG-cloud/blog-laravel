<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Redis;

class NotifyUserCacheFlush
{

    public function handle(object $event): void
    {
        Redis::del('users');
    }
}
