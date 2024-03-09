<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Leaderflight;
use App\Models\Tourleadertour;
use Illuminate\Http\Request;
use App\Models\Airport;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LeaderFlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Leaderflight::all();

        return view('admin.pages.leader_flight.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flights = Leaderflight::all();
        $tours = Tourleadertour::all();
        $airports = Airport::all();

        return view('admin.pages.leader_flight.add', compact('flights','tours','airports'));
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
            'tourleader_tour_id' => 'required',
            'departure_date' => 'required',
            'departure_city' => 'required',
            'arrival_city' => 'required'
        ]);

        $flights = new Leaderflight();
        $flights->tourleader_tour_id= $request ->input('tourleader_tour_id');
        $flights->departure_date= $request->input('departure_date');
        $flights->departure_city= $request->input('departure_city');
        $flights->arrival_city= $request->input('arrival_city');

        $flights->save();
        
        Session::flash('success', 'Flight Reservation has been Added Successfully');
        return Redirect::route('flight_reservation.create');
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
        $flights = Leaderflight::find($id);
        $tours = Tourleadertour::all();
        $airports = Airport::all();

        return view('admin.pages.leader_flight.edit', compact('flights','tours','airports'));
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
            'tourleader_tour_id' => 'required',
            'departure_date' => 'required',
            'departure_city' => 'required',
            'arrival_city' => 'required'
        ]);
        $flights = Leaderflight::find($id);
        $flights->tourleader_tour_id= $request ->input('tourleader_tour_id');
        $flights->departure_date= $request->input('departure_date');
        $flights->departure_city= $request->input('departure_city');
        $flights->arrival_city= $request->input('arrival_city');

        $flights->update();
        
        Session::flash('success', 'Flight Reservation has been Updated Successfully');
        return Redirect::route('flight_reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flights = Leaderflight::find($id);
        $flights ->delete();
        
        Session::flash('success', 'Flight Reservation has been Deleted Successfully');
        return Redirect::route('flight_reservation.index');
    }
}
