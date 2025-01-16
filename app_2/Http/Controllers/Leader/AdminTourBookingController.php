<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Tourleadertour;
use App\Models\Tourleader;
use App\Models\Gti;
use App\Models\Airport;
use App\Models\City;
use App\Models\TourBooking;

class AdminTourBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->email;

        
        $leader = Tourleader::where('th_email','=',$user)->first()->id;

        $tours = Tourleadertour::where('tourleader_id','=',$leader)->get();

        return view('admin.pages.leader.tour_booking.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tours =  Gti::all();
        $cities =  City::all();

        // $air_city = Airport::select('city_id')->get();
        return view('admin.pages.leader.tour_booking.add', compact('tours', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookings = new TourBooking();
        $bookings->gti_id= $request ->input('gti_id');
        $bookings->deparature_city= $request->input('deparature_city');
        $bookings->deparature_date= $request->input('deparature_date');
        $bookings->group_size= $request->input('group_size');
        $bookings->price= $request->input('price');
        $bookings->save();
        
        Session::flash('success', 'Booking Completed Successfully');
        return Redirect::route('tour_booking.create');
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
        $tours =  Gti::all();
        $cities =  City::all();
        $bookings = TourBooking::find($id);

        // $air_city = Airport::select('city_id')->get();
        return view('admin.pages.leader.tour_booking.edit', compact('tours', 'cities', 'bookings'));
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
        $bookings = TourBooking::find($id);
        $bookings->gti_id= $request ->input('gti_id');
        $bookings->deparature_city= $request->input('deparature_city');
        $bookings->deparature_date= $request->input('deparature_date');
        $bookings->group_size= $request->input('group_size');
        $bookings->price= $request->input('price');
        $bookings->update();
        
        Session::flash('success', 'Booking Updated Successfully');
        return Redirect::route('tour_booking.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookings = TourBooking::find($id);
        $bookings -> delete();
        
        Session::flash('success', 'Booking Deleted Successfully');
        return Redirect::route('tour_booking.index');
    }
}
