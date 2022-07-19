<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $id = Auth::id(); 
        $item = User::all()
            ->where('id', $id)
            ->firstOrFail();
        return view ('pages.profile',[
            'item' => $item
        ]);
    }

    public function edit($id)
    {
        $id = Auth::id();
        $detail = User::find($id);

        return view('pages.edit-profile', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $id = Auth::id();   
        $item = User::find($id);

        $item->name = $request['name'];
        $item->username = $request['username'];
        $item->organization = $request['organization'];
        $item->email = $request['email'];
        $item->phone = $request['phone'];
        $item->update();
        return redirect()->route('profile.index');
    }
}
