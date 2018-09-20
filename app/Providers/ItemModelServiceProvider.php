<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\ItemObserver;
use App\Item;

class ItemModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Item::observe(ItemObserver::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
