<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guide;
use App\Models\Guidereservation;
use App\Models\Tourleadertour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class GuideReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Guidereservation::all();

        return view('admin.pages.guide_reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservations = Guidereservation::all();
        $tours = Tourleadertour::all();
        $guides = Guide::all();

        return view('admin.pages.guide_reservation.add', compact('reservations','tours','guides'));

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
            'guide_id' => 'required',
            'tourleader_tour_id' => 'required',
            'reservation_date' => 'required',
            'from_date' => 'required',
            'to_date' => 'required'
        ]);
        $reservations = new Guidereservation();
        
        $reservations->guide_id= $request ->input('guide_id');
        $reservations->tourleader_tour= $request->input('tourleader_tour_id');
        $reservations->reservation_date= $request->input('reservation_date');
        $reservations->from_date= $request->input('from_date');
        $reservations->to_date= $request->input('to_date');
        $reservations->confirm_date= $request->input('confirm_date');

        $reservations-> save();

        Session::flash('success', 'Guide Reservation has been Added Successfully');
        return Redirect::route('reserve_guide.create');
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
        $reservations = Guidereservation::find($id);
        $tours = Tourleadertour::all();
        $guides = Guide::all();

        return view('admin.pages.guide_reservation.edit', compact('reservations','tours','guides'));
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
            'guide_id' => 'required',
            'tourleader_tour_id' => 'required',
            'reservation_date' => 'required',
            'from_date' => 'required',
            'to_date' => 'required'
        ]);
        $reservations = Guidereservation::find($id);
        
        $reservations->guide_id= $request ->input('guide_id');
        $reservations->tourleader_tour= $request->input('tourleader_tour_id');
        $reservations->reservation_date= $request->input('reservation_date');
        $reservations->from_date= $request->input('from_date');
        $reservations->to_date= $request->input('to_date');
        $reservations->confirm_date= $request->input('confirm_date');

        $reservations-> update();

        Session::flash('success', 'Guide Reservation has been Updated Successfully');
        return Redirect::route('reserve_guide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservations = Guidereservation::find($id);
        $reservations ->delete();
        
        Session::flash('success', 'Guide Reservation has been Deleted Successfully');
        return Redirect::route('reserve_guide.index');
    }
}
