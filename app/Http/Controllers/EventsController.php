<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::orderBy('created_at', 'DESC')->paginate(6);
        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=> 'required',
            'topic' => 'required',
            'host' => 'required',
            'venue'=>'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'time' => 'required',
            'image' => 'required|file:image|max:5000|mimes:jpg,jpeg,png,gif,bmp'
        ]);

        // dd($data);
        $events = Events::create($data);
        
        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|file:image|max:5000|mimes:jpg,jpeg,png,gif,bmp'
            ]);
            $events->update([
                'image' => $request->image->store('uploads/events', 'public')
            ]);
        }
        
        return redirect()->route('event.show',$events->id)->with('success', 'Event Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events, $id)
    {
        $events = Events::orderBy('created_at', 'DESC')->get();
        $events = Events::findOrFail($id);
        return view('events.show', compact('events','events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events, $id)
    {
        $event = Events::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Events::findOrFail($id);
        $data = $request->validate([
            'title'=> 'required',
            'topic' => 'required',
            'host' => 'required',
            'venue'=>'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'time' => 'required',
            'image' => 'required|file:image|max:5000|mimes:jpg,jpeg,png,gif,bmp'
        ]);
        // dd($data);
        $event->update($data);
        
       
        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|file:image|max:5000|mimes:jpg,jpeg,png,gif,bmp'
            ]);
            $event->update([
                'image' => $request->image->store('uploads/events', 'public')
            ]);
        }

        return redirect()->route('event.index')->with('success', 'News Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events ,$id)
    {
        $event = Events::findOrFail($id);
        // dd($event);
        Storage::delete('storage/'.$event->image);
        $event->delete();
        return redirect()->route('events');
    }
}
