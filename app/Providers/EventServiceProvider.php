<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

use App\Events\UserSaving;
use App\Listeners\UserSaving as UserSavingListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        UserSaving::class => [
            UserSavingListener::class,
        ],
        'App\Events\UserLoggedIn' => [
            'App\Listeners\WriteMessageToFile',
        ],
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\SendEmailNotification',
        ],
        'App\Events\ClearCache' => [
            'App\Listeners\WarmUpCache',
        ],
        'App\Events\ActionDone' => [
            'App\Listeners\ThingToDoAfterEventWasFired',
        ],
    ];

    protected $subscribe = [
        'App\Listeners\ExampleEventSubscriber',
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
