<?php

namespace App\Http\Controllers\Transport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Tourleadertour;
use App\Models\TransportReservation;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class GroundTransportReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = [];
        $supplier = Supplier::where('s_email', auth()->user()->email)->first();
        // dd($supplier);
        if(isset($supplier->id)) {
            $reservations = TransportReservation::where('supplier_id', $supplier->id)->get();
        }
        return view('admin.pages.transport_reservation.index',compact('reservations'));
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
        $reservations = TransportReservation::find($id);
        if($request ->input('supplier_id')){
            $reservations->supplier_id= $request ->input('supplier_id');
        }

        $valideData = $request->validate([
            'tourleader_tour_id' => 'required',
            'tour_code' => 'required | numeric | min:4',
            'transport_cost' => 'required | numeric | min:1',
            'service_date' => 'required',
            'confirm_date' => 'required',
            'confirm_price' => 'required | numeric | min:1'
        ]);
        $reservations->tourleader_tour_id= $request ->input('tourleader_tour_id');
        $reservations->tour_code= $request->input('tour_code');
        $reservations->transport_cost= $request->input('transport_cost');
        $reservations->service_date= $request->input('service_date');
        $reservations->confirm_date= $request->input('confirm_date');
        $reservations->confirm_price= $request->input('confirm_price');

        $reservations->update();
        Session::flash('success', 'Reservation has been Updated Successfully');
        return Redirect::route('ground_transport.index');
    }
    
    public function confirm($id)
    {
        $reservations = TransportReservation::find($id);
        $reservations->confirm_date= now();
        $reservations->update();
        Session::flash('success', 'Confirmation Completed');
        return Redirect::route('ground_transport.index');
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
}
