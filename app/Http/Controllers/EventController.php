<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index (Request $request)
    {
        $items = Event::all();
        return view('pages.event',[
            'items' => $items
        ]);
    }

    public function store(EventRequest $request)
    {
        $data = $request->all();
        Event::create($data);
        return redirect()->route('event.index');
    }

}
