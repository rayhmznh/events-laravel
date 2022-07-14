<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailContentController extends Controller
{
    public function index(Request $request, $id)
    {
        $items = Event::all()
                ->where('id', $id)
                ->firstOrFail();

        return view('pages.detail-content',[
            'items'=> $items
        ]);
    }
}
