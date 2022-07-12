<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllEventController extends Controller
{
    public function index(Request $request)
    {
        return view ('pages.event-dashboard');
    }

    public function add(Request $request)
    {
        return view('pages.add-event');
    }
}
