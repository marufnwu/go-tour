<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airports = Airport::all();
        return view('admin.pages.airport.index', compact('airports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $countries = Country::all();
        $airports = Airport::all();
        return view('admin.pages.airport.add', compact('cities','countries','airports'));
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
            'airport_name' => 'required | min:3 | regex:/^[\pL\s\-]+$/u',
            'city_id' => 'required',
            'country_id' => 'required'
        ]);
        $airports = new Airport();
        $airports->airport_name= $request ->input('airport_name');
        $airports->city_id= $request->input('city_id');
        $airports->country_id= $request->input('country_id');

        $airports->save();

        Session::flash('success', 'Airport has been Added Successfully');
        return Redirect::route('airport.create');
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
        $airports = Airport::find($id);
        $cities = City::all();
        $countries = Country::all();
        return view('admin.pages.airport.edit', compact('airports','cities', 'countries'));
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
            'airport_name' => 'required | min:3',
            'city_id' => 'required',
            'country_id' => 'required'
        ]);
        $airports = Airport::find($id);
        $airports->airport_name= $request ->input('airport_name');
        $airports->city_id= $request->input('city_id');
        $airports->country_id= $request->input('country_id');

        $airports->update();
        Session::flash('success', 'Airport has been Updated Successfully');
        return Redirect::route('airport.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $airports = Airport::find($id);
        $airports ->delete();
        
        Session::flash('success', 'Airport has been Deleted Successfully');
        return Redirect::route('airport.index');
    }
}
