<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.pages.city.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.pages.city.add', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $is_exist = City::where('city_name', $request->city_name)->first();
        if(!$is_exist) {

            $valideData = $request->validate([
                'city_name' => 'required | min:1',
                'country_id' => 'required'
            ]);
            $cities = new City();
            $cities->city_name= $request ->input('city_name');
            $cities->country_id= $request->input('country_id');

            $cities->save();


            Session::flash('success', 'City has been Added Successfully');
            return Redirect::route('city.create');
        }else{
            Session::flash('warning', 'This City already exist.');
            return 'success';
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
        
        $cities = City::find($id);
        $countries = Country::all();
        
        return view('admin.pages.city.edit', compact('cities', 'countries'));
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
            'city_name' => 'required | min:1',
            'country_id' => 'required'
        ]);
        $cities = City::find($id);
        $cities->city_name= $request ->input('city_name');
        $cities->country_id= $request->input('country_id');

        $cities->update();
        Session::flash('success', 'City has been Added Successfully');
        return Redirect::route('city.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cities = City::find($id);
        $cities ->delete();
        
        Session::flash('success', 'City has been Deleted Successfully');
        return Redirect::route('city.index');
    
    }
}
