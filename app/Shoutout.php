<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoutout extends Model
{
    //
    protected $table = 'shoutouts';

    protected $fillable = ['handle', 'email', 'content'];
}
