<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Sight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sights = Sight::all();
        return view('admin.pages.sight.index', compact('sights'));
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
        return view('admin.pages.sight.add', compact('cities', 'countries'));
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
            'sight_name' => 'required | min:1 | regex:/^[\pL\s\-]+$/u',
            'country_id' => 'required',
            'city_id' => 'required',
            'description' => 'required | min:5',
            'entrance_fees' => 'required | min:0 | numeric',
            'national_pass' => 'required',
            'email' => 'required | email',
            'phone' => 'required | numeric'
        ]);
        $sights = new Sight();
        $sights->sight_name= $request ->input('sight_name');
        $sights->country_id= $request->input('country_id');
        $sights->city_id= $request->input('city_id');
        $sights->sights_description= $request->input('description');
        $sights->sight_entrance_fees= $request->input('entrance_fees');
        $sights->sight_national_pass= $request->input('national_pass');
        $sights->sight_email= $request->input('email');
        $sights->sight_phone_number= $request->input('phone');

        $sights->save();
        
        Session::flash('success', 'Sight has been Added Successfully');
        return Redirect::route('sight_list.create');
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
        $sights = Sight::find($id);
        $cities = City::all();
        $countries = Country::all();

        return view('admin.pages.sight.edit', compact('sights', 'cities', 'countries'));
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
            'sight_name' => 'required | min:1 | regex:/^[\pL\s\-]+$/u',
            'country_id' => 'required',
            'city_id' => 'required',
            'description' => 'required | min:5',
            'entrance_fees' => 'required | min:0 | numeric',
            'national_pass' => 'required',
            'email' => 'required | email',
            'phone' => 'required | numeric'
        ]);

        $sights = Sight::find($id);
        $sights->sight_name= $request ->input('sight_name');
        $sights->country_id= $request->input('country_id');
        $sights->city_id= $request->input('city_id');
        $sights->sights_description= $request->input('description');
        $sights->sight_entrance_fees= $request->input('entrance_fees');
        $sights->sight_national_pass= $request->input('national_pass');
        $sights->sight_email= $request->input('email');
        $sights->sight_phone_number= $request->input('phone');

        $sights->update();

        Session::flash('success', 'Sight has been Updated Successfully');
        return Redirect::route('sight_list.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sights = Sight::find($id);
        $sights ->delete();
        
        Session::flash('success', 'Sight has been Deleted Successfully');
        return Redirect::route('sight_list.index');
    }
}
