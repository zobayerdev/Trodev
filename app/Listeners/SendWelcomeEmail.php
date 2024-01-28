<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        //
        $userId = User::find($event->userId)->toArray();

        Mail::send('eventmail',['userId'=>$userId], function ($message) use($userId){
            $message->to($userId['email']);
            $message->subject('Welcome');
        });
    }
}
