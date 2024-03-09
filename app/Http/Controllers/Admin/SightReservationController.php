<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sight;
use App\Models\Sightreservation;
use App\Models\Tourleadertour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SightReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sightreservations = Sightreservation::all();
        return view('admin.pages.sight_reservation.index', compact('sightreservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sights = Sight::all();
        $tours = Tourleadertour::all();


        return view('admin.pages.sight_reservation.add', compact('sights','tours'));
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
            'sight_reservation' => 'required | min:5 | regex:/^[\pL\s\-]+$/u',
            'sight_id' => 'required',
            'tour_leader_tour_id' => 'required',
            'reservation_date' => 'required',
            'sight_visit_date' => 'required'
        ]);

        $sightreservations = new Sightreservation();
        $sightreservations->sight_reservation= $request ->input('sight_reservation');
        $sightreservations->sight_id= $request->input('sight_id');
        $sightreservations->tour_leader_tour_id= $request->input('tour_leader_tour_id');
        $sightreservations->reservation_date= $request->input('reservation_date');
        $sightreservations->confirmation_date= $request->input('confirmation_date');
        $sightreservations->sight_visit_date= $request->input('sight_visit_date');

        $sightreservations->save();
        
        Session::flash('success', 'Sight Reservation has been Added Successfully');
        return Redirect::route('sight_reservation.create');
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
        $sightreservations = Sightreservation::find($id);
        $sights = Sight::all();
        $tours = Tourleadertour::all();
        return view('admin.pages.sight_reservation.edit', compact('sights', 'sightreservations', 'tours'));
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
            'sight_reservation' => 'required | min:5 | regex:/^[\pL\s\-]+$/u',
            'sight_id' => 'required',
            'tour_leader_tour_id' => 'required',
            'reservation_date' => 'required',
            'sight_visit_date' => 'required'
        ]);
        $sightreservations = Sightreservation::find($id);
        $sightreservations->sight_reservation= $request ->input('sight_reservation');
        $sightreservations->sight_id= $request->input('sight_id');
        $sightreservations->tour_leader_tour_id= $request->input('tour_leader_tour_id');
        $sightreservations->reservation_date= $request->input('reservation_date');
        $sightreservations->confirmation_date= $request->input('confirmation_date');
        $sightreservations->sight_visit_date= $request->input('sight_visit_date');

        $sightreservations->update();
        
        Session::flash('success', 'Sight Reservation has been Updated Successfully');
        return Redirect::route('sight_reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sightreservations = Sightreservation::find($id);
        $sightreservations ->delete();
        
        Session::flash('success', 'Sight Reservation has been Deleted Successfully');
        return Redirect::route('sight_reservation.index');
    }
}
