<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view ('pages.dashboard',
        [
            'event_view' => Event::sum('view'),
            'event_click' => Event::sum('view_link')
        ]);
    }

    
}

