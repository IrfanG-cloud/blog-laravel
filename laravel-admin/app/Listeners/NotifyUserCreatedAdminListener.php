<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Mail\Message;
use App\Events\UserCreatedEvent;

class NotifyUserCreatedAdminListener
{
    
    public function handle(UserCreatedEvent $event): void
    {
        $user = $event->user;
        \Mail::send('admin', [], function(Message $message){
            $message->to('admin@admin.com');
            $message->subject('New user has been created');
        });
    }
}
