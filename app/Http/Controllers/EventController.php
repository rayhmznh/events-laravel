<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('pages.event');
        return view ('pages.event-dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add-event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'organizer' => 'required', 
            'title'=> 'required',
            'location' => 'required',
            'registration_link' => 'required',
            'description' => 'required',
            'poster'=> 'required|image|mimes:png,jpg,jpeg'
        ]);

        //upload image
        $poster = $request->file('image');
        $poster->storeAs('public/poster', $poster->hashName());

        $event = Event::create([
            'organizer'     => $request->organizer,
            'title'     => $request->title,
            'location'   => $request->location,
            'registration_link'   => $request->registration_link,
            'description'   => $request->description,
            'poster'     => $poster->hashName(),
        ]);

        // if($event){
        //     // redirect ke halaman my event
        //     return redirect()->
        // }
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
        //
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
        //
    }
}