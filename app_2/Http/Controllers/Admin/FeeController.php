<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use App\Models\Fee;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees= Fee::all();
        return view('admin.pages.fee.index', compact('fees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        $accommodations = Accommodation::all();
        return view('admin.pages.fee.add', compact('hotels', 'accommodations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $valideData = $request->validate([
            'price' => 'required | min:1 | numeric',
            'hotel_id' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'accommodation_type_id' => 'required'
        ]);
        $fees = new Fee();
        $fees->hotel_id= $request ->input('hotel_id');
        $fees->from_date= $request ->input('from_date');
        $fees->to_date= $request ->input('to_date');
        $fees->accommodation_type_id= $request ->input('accommodation_type_id');
        $fees->price= $request ->input('price');

        $fees->save();
        Session::flash('success', 'Fee has been Added Successfully');
        return Redirect::route('fee.create');
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
        $accommodations = Accommodation::all();
        $fees = Fee::find($id);
        return view('admin.pages.fee.edit',compact('hotels', 'accommodations', 'fees'));
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
            'price' => 'required | min:1 | numeric',
            'hotel_id' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'accommodation_type_id' => 'required'
        ]);
        $fees = Fee::find($id);
        $fees->hotel_id= $request ->input('hotel_id');
        $fees->from_date= $request ->input('from_date');
        $fees->to_date= $request ->input('to_date');
        $fees->accommodation_type_id= $request ->input('accommodation_type_id');
        $fees->price= $request ->input('price');

        $fees->update();
        Session::flash('success', 'Fee has been Updated Successfully');
        return Redirect::route('fee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fees= Fee::find($id);
        $fees-> delete();
        
        Session::flash('success', 'Free has been Deleted Successfully');
        return Redirect::route('fee.index');
    }
}
