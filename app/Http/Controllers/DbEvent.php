<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbEvent extends Controller
{
    public function index(Request $request)
    {
        return view ('pages.databaseEvent');
    }
}
