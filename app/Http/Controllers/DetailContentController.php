<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DetailContentController extends Controller
{
    public function index(Request $request, $id)
    {
        $items = Event::all()
                ->where('id', $id)
                ->firstOrFail();

        $Key = 'blog_' . $items->id;

        if (!Session::has($Key)) {
            $items->increment('view');
            Session::put($Key, 1);
        }

        return view('pages.detail-content',[
            'items'=> $items
        ]);
    }
}
