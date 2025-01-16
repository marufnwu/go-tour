<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Sight;
use App\Models\Sightdistant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class SightDistantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sightdistants = Sightdistant::all();
        return view('admin.pages.sight_distant.index', compact('sightdistants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::orderBy('city_name','asc')->get();
        $countries = Country::orderBy('country_name','asc')->get();
        $sights = Sight::orderBy('sight_name','asc')->get();
        return view('admin.pages.sight_distant.add', compact('cities', 'countries', 'sights'));
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
            'distant_sight_name' => 'required | min:5 | string',
            'country_id' => 'required',
            'city_id' => 'required',
            'first_site' => 'required',
            'second_site' => 'required',
            'sight_distant' => 'required | numeric | min:1'
        ]);

        $sightdistants = new Sightdistant();
        
        $sightdistants->distant_sight_name= $request ->input('distant_sight_name');
        $sightdistants->country_id= $request->input('country_id');
        $sightdistants->city_id= $request->input('city_id');
        $sightdistants->first_site= $request->input('first_site');
        $sightdistants->second_site= $request->input('second_site');
        $sightdistants->sight_distant= $request->input('sight_distant');

        $sightdistants->save();
        
        Session::flash('success', 'Sight Distant has been Added Successfully');
        return Redirect::route('sight_distant.create');
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
        $sightdistants = Sightdistant::find($id);
        $cities = City::orderBy('city_name','asc')->get();
        $countries = Country::orderBy('country_name','asc')->get();
        $sights = Sight::orderBy('sight_name','asc')->get();
        return view('admin.pages.sight_distant.edit', compact('sightdistants', 'cities', 'countries', 'sights'));
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
            'distant_sight_name' => 'required | min:5 | string',
            'country_id' => 'required',
            'city_id' => 'required',
            'first_site' => 'required',
            'second_site' => 'required',
            'sight_distant' => 'required | numeric | min:1'
        ]);
        $sightdistants = Sightdistant::find($id);
        
        $sightdistants->distant_sight_name= $request ->input('distant_sight_name');
        $sightdistants->country_id= $request->input('country_id');
        $sightdistants->city_id= $request->input('city_id');
        $sightdistants->first_site= $request->input('first_site');
        $sightdistants->second_site= $request->input('second_site');
        $sightdistants->sight_distant= $request->input('sight_distant');

        $sightdistants->update();

        Session::flash('success', 'Sight has been Updated Successfully');
        return Redirect::route('sight_distant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sightdistants = Sightdistant::find($id);
        $sightdistants ->delete();
        
        Session::flash('success', 'Sight Distant has been Deleted Successfully');
        return Redirect::route('sight_distant.index');
    }
}
