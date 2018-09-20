<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    //

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $item = new Item;
        $item->name = $request->get('name');
        $item->price = $request->get('price');
        $item->save();

    return redirect('/item');
    }
}
