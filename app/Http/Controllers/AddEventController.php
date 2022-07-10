<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddEventController extends Controller
{
    public function index(Request $request)
    {
        return view ('pages.add-event');
    }
}
