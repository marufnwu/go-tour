<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Gti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ActivityController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();
        return view('admin.pages.activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gtis = Gti::all();
        return view('admin.pages.activity.add',compact('gtis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valideData = $request->validate([
            'activity_name' => 'required | min:5',
            'gti' => 'required'
        ]);

        $activities = new Activity();
        $activities->activity_name= $request ->input('activity_name');
        $activities->gti= $request ->input('gti');

        $activities->save();
        Session::flash('success', 'Activity has been Added Successfully');
        return Redirect::route('activity.create');
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
        $activities = Activity::find($id);
        $gtis = Gti::all();

        return view('admin.pages.activity.edit', compact('activities','gtis'));
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

        $valideData = $request->validate([
            'activity_name' => 'required | min:5',
            'gti' => 'required'
        ]);
        $activities = Activity::find($id);
        $activities->activity_name= $request ->input('activity_name');
        $activities->gti= $request ->input('gti');
        
        $activities->update();
        Session::flash('success', 'Activity has been Updated Successfully');
        return Redirect::route('activity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activities = Activity::find($id);
        $activities -> delete();
        
        Session::flash('success', 'Activity has been Deleted Successfully');
        return Redirect::route('activity.index');
    }
}
