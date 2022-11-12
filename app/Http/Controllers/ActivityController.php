<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Activity;
use Illuminate\Support\Facades\Storage;

use App\Models\Events;
use Image;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::orderBy('created_at', 'DESC')->paginate(12);
        return view('activities.index',compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activities.create');
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
            'title'=>'required',
            'goal' => 'required',
            'raised' => 'required',
            'percentage' => 'required',
            'description'=>'required',
            'image' => 'required|file:image|max:5000|mimes:jpg,jpeg,png,gif,bmp'
        ]);

        $activity =Activity::create($data);

        if($request->file('image')) {
            $request->validate([
                'image' => 'required|file:image|max:5000|mimes:jpg,jpeg,png,gif,bmp'
            ]);
            $activity->update([
                'image' => $request->image->store('uploads/activities', 'public')
            ]);
        }

        return redirect()->route('activity.show',$activity->id)->with('Success', 'Course successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::orderBy('created_at', 'DESC')->get();
        $activity = Activity::findorFail($id);
        $activities = Activity::latest()->take(4)->get();
        $events = Events::latest()->take(3)->get();
        $image = Gallery::latest()->take(3)->get();
    
        return view('activities.show',compact('activity', 'activity', 'activities', 'events', 'image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $activity = Activity::findorFail($id);

        return view('activities.edit',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $activity = Activity::findorFail($id);
        $data = $request->validate([
            'title'=>'required',
            'goal' => 'required',
            'raised' => 'required',
            'percentage' => 'required',
            'description'=>'required',
            'image' => 'required|file:image|max:5000|mimes:jpg,jpeg,png,gif,bmp'
        ]);

        $activity->update($data);
       
        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|file:image|max:5000|mimes:jpg,jpeg,png,gif,bmp'
            ]);
            $activity->update([
                'image' => $request->image->store('uploads/activities', 'public')
            ]);
        }

        return redirect()->route('activity.index')->with('success', 'Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        Storage::delete('storage/'.$activity->image);
        $activity->delete();
        return redirect()->route('activity.index');
    }
}
