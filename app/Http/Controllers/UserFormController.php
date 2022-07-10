<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function index(Request $request)
    {
        return view ('pages.user-form');
    }
}
