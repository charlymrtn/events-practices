<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Library\Services\Contracts\CustomServiceInterface;
//use App\Post;
//use Illuminate\Support\Facades\Gate;
use App\Events\ClearCache;

use App\Events\eventTrigger;

class EventController extends Controller
{
    //
    public function index()
    {
        // ...

        // you clear specific caches at this stage
        $arr_caches = ['categories', 'products'];

        // want to raise ClearCache event
        event(new ClearCache($arr_caches));

        // ...
    }

    public function alertBox(){
        return view('eventListener');
    }

    public function fireEvent(){
        event(new eventTrigger());
    }
}
