<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class AllEventController extends Controller
{
    public function index(Request $request)
    {
        $data = Event::all();

        return view('pages.event-dashboard', compact('data'));
    }

    public function add(Request $request)
    {
        return view('pages.add-event');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('poster')) {
            $filenameWithExt = Str::slug($request->get('title'));
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('poster')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('poster')->move('storage/poster', $filenameSimpan);
        }else{
            $filenameSimpan = NULL;
        }

        $data = Event::create([
            'organizer' => $request->get('organizer'),
            'title' => $request->get('title'),
            'category' => $request->get('category'),
            'faculty' => $request->get('faculty'),
            'date_and_time' => $request->get('date_and_time'),
            'location' => $request->get('location'),
            'registration_link' => $request->get('registration_link'),
            'description' => $request->get('description'),
            'poster' => $filenameSimpan,
            'status' => "Aktif",
        ]);
        return redirect()->route('all-event.index');
    }

    public function destroy($id)
    {
        $file = Event::find($id);
        File::delete('storage/poster/'.$file->poster);
        $file->delete();
        
        return back();
    }
}
