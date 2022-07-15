<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;

class DashboardAdminController extends Controller
{
    public function index(Request $request)
    {
        return view ('pages.dashboardAdmin',[
            'user' => User::count(),
            'event' => Event::count()
        ]);
    }
}
