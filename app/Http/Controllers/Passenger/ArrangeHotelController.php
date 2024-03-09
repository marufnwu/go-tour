<?php

namespace App\Http\Controllers\Passenger;

use App\Http\Controllers\Controller;
use App\Models\Arrangehotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ArrangeHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Arrangehotel::all();
        return view('admin.pages.passenger.hotel_arrangement.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.passenger.hotel_arrangement.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotels = new Arrangehotel();
        $hotels->hotel_name= $request ->input('hotel_name');
        $hotels->from_date= $request ->input('from_date');
        $hotels->to_date= $request ->input('to_date');

        $hotels->save();
        Session::flash('success', 'Added Successfully');
        return Redirect::route('hotel_arrangement.create');
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
        $hotels = Arrangehotel::find($id);
        return view('admin.pages.passenger.hotel_arrangement.edit', compact('hotels'));
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
        $hotels = Arrangehotel::find($id);
        $hotels->hotel_name= $request ->input('hotel_name');
        $hotels->from_date= $request ->input('from_date');
        $hotels->to_date= $request ->input('to_date');

        $hotels->save();
        Session::flash('success', 'Updated Successfully');
        return Redirect::route('hotel_arrangement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotels = Arrangehotel::find($id);
        $hotels -> delete();
        
        Session::flash('success', 'Deleted Successfully');
        return Redirect::route('hotel_arrangement.index');
    }
}
