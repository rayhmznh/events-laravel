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

    public function update(ProfileRequest $request, $id)
    {
        $id = Auth::id(); 
        $data = $request->all();
        
        $item = User::findOrFail($id);
        $item->update($data);
        return redirect()->route('profile.index');
    }
}
