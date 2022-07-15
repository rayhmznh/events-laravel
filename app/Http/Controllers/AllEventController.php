<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AllEventController extends Controller
{
    public function index(Request $request)
    {   
        $items = Event::all();
        return view ('pages.event', [
            "items" => $items
        ]);
    }

    public function add(Request $request)
    {
        return view('pages.add-event');
    }
}