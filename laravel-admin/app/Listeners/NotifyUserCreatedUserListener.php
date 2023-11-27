<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Mail\Message;
use App\Events\UserCreatedEvent;

class NotifyUserCreatedUserListener
{
    
    public function handle(UserCreatedEvent $event): void
    {
        \Mail::send('user', [],function(Message $message){
            $message->to('user@user.com');
            $message->subject('New user has been created');
        });
    }
}
