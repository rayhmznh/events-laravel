<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailContentController extends Controller
{
    public function index(Request $request)
    {
        return view ('pages.detail-content');
    }
}
