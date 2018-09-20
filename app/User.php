<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Events\UserSaving;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //eventos

    protected $dispatchesEvents = [
        'saving' => UserSaving::class,
    ];


    // protected function fireCustomModelEvent($event, $method)
    // {
    //     if (! isset($this->dispatchesEvents[$event])) {
    //         return;
    //     }

    //     $result = static::$dispatcher->$method(new $this->dispatchesEvents[$event]($this));

    //     if (! is_null($result)) {
    //         return $result;
    //     }
    // }
}
