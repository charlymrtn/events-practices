<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Events\UserSaving as UserSavingEvent;

class UserSaving
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserSavingEvent $event)
    {
        //
        //app('log')->info($event->user);
        if (stripos($event->user->name, 'paul') !== false) {
            return false;
        }
    }
}
