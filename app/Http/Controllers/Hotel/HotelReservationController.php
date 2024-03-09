<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Tourleadertour;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HotelReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $hotel = Hotel::where('hotel_email', auth()->user()->email)->first();
        if(isset($hotel->id)) {
            $data = Reservation::where('hotel_id', $hotel->id)->get();
        }
        return view('admin.pages.hotel_reservation.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $hotels = Hotel::all();
        $tours = Tourleadertour::all();
        $reservations = Reservation::find($id);
        return view('admin.pages.reservation.edit', compact('hotels','reservations', 'tours'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function confirm($id)
    {
        $data = Reservation::find($id);
        $data->confirmation_date= now();
        $data->update();
        Session::flash('success', 'Confirmation Completed');
        return Redirect::route('hotel_reservation.index');
    }

}
