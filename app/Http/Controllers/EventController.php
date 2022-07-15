<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Faculty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\EventRequest; 

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view ('pages.event-dashboard', ['events' => $events->sortByDesc('id')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $faculties = Faculty::all();
        $categories = ['Webinar', 'Workshop'];
        return view('pages.add-event', [
            'category' => $categories,
            'faculties' => $faculties,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate( [
            'organizer' => 'required', 
            'title'=> 'required',
            'faculty_id'=> 'required',
            'category'=> 'nullable',
            'start_event'=> 'nullable',
            'time_event'=> 'nullable',
            'location' => 'required',
            'registration_link' => 'required',
            'description' => 'required',
            'image'=> 'nullable|image|mimes:png,jpg,jpeg'
        ]);

        // validate upload image
        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('poster');
        }

        $event  = Event::create($validateData);
        if($event){
            // redirect ke halaman my event, harusnya kasih pesan sukses
            return redirect()->route('event.index');
        } else {
            // redirect ke halaman add event, harusnya sama kasih pesan gagal
            return redirect()->route('event.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('pages.add-event');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // masih ngasal, belom tak coba lagi. sisa semalem
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('event.index');
    }
}