<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbUser extends Controller
{
    public function index(Request $request)
    {
        return view ('pages.databaseUser');
    }
}
