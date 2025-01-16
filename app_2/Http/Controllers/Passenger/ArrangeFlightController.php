<?php

namespace App\Http\Controllers\Passenger;

use App\Http\Controllers\Controller;
use App\Models\Arrangeflight;
use App\Models\passengerInformations;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ArrangeFlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $psngr = passengerInformations::where('email', auth()->user()->email)->first();
        if(isset($psngr->id)) {
            $flights = Arrangeflight::where('passenger_id', $psngr->id)->get();
        }else $flights = [];

        return view('admin.pages.passenger.flight_arrangement.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.passenger.flight_arrangement.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flights = new Arrangeflight();
        $flights->departure_city= $request ->input('departure_city');
        $flights->arrival_city= $request ->input('arrival_city');
        $flights->departure_date= $request ->input('departure_date');

        $flights->save();
        Session::flash('success', 'Added Successfully');
        return Redirect::route('flight_arrangement.create');
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
        $flights = Arrangeflight::find($id);
        return view('admin.pages.passenger.flight_arrangement.edit', compact('flights'));
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
        $flights = Arrangeflight::find($id);
        $flights->departure_city= $request ->input('departure_city');
        $flights->arrival_city= $request ->input('arrival_city');
        $flights->departure_date= $request ->input('departure_date');

        $flights->update();
        Session::flash('success', 'Updated Successfully');
        return Redirect::route('flight_arrangement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flights = Arrangeflight::find($id);
        $flights -> delete();
        
        Session::flash('success', 'Deleted Successfully');
        return Redirect::route('flight_arrangement.index');
    }
}
