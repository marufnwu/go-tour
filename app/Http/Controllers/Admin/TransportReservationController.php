<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Tourleadertour;
use App\Models\TransportReservation;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\Transportationcar;


class TransportReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userType = auth()->user()->type; 
        if ($userType == 'Admin' || $userType == 'OP') {
            $reservations = TransportReservation::all();

            return view('admin.pages.transport_reservation.index',compact('reservations'));
        }elseif ($userType == 'BC') {

            $currentUser = auth()->user()->email;
            $currentSupplier = Supplier::where('s_email','=',$currentUser)->get()[0]->id;

            $reservations = TransportReservation::where('supplier_id','=',$currentSupplier)->get();

            return view('admin.pages.transport_reservation.index',compact('reservations'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = Tourleadertour::all();
        $supps = Supplier::where('type','=','BC')->get();
        $Transporttypes = Transportationcar::all();

        return view('admin.pages.transport_reservation.add',compact('tours', 'supps','Transporttypes'));
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
            'supplier_id' => 'required',
            'transport_cost' => 'required | numeric | min:1',
            'service_date' => 'required',
            'transport_type' => 'required'
        ]);

        $reservations = new TransportReservation();
        $reservations->tourleader_tour_id= $request ->input('tourleader_tour_id');
        $reservations->supplier_id= $request ->input('supplier_id');
        $reservations->transport_cost= $request->input('transport_cost');
        $reservations->service_date= $request->input('service_date');
        $reservations->confirm_date= $request->input('confirm_date');
        $reservations->confirm_price= $request->input('confirm_price');
        $reservations->transport_type= $request->input('transport_type');

        $tltId = $request ->input('tourleader_tour_id');

        $reservations->tour_code= Tourleadertour::where('id','=',$tltId)->get()[0]->tour_code;

        $reservations->save();
        Session::flash('success', 'Reservation has been Added Successfully');
        return Redirect::route('reservetransport.create');
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
        $reservations = TransportReservation::find($id);
        $supps = Supplier::all();
        $tours = Tourleadertour::all();
        $Transporttypes = Transportationcar::all();

        return view('admin.pages.transport_reservation.edit', compact('reservations', 'supps', 'tours','Transporttypes'));
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
            'tourleader_tour_id' => auth()->user()->type=='Admin' ? 'required':'',
            'supplier_id' => auth()->user()->type=='Admin' ? 'required':'',
            'transport_cost' => 'required | numeric | min:1',
            'service_date' => 'required',
            'confirm_date' => auth()->user()->type=='BC' ?'required':'',
            'confirm_price' => auth()->user()->type=='BC' ?'required | numeric | min:1':''
        ]);
        $reservations = TransportReservation::find($id);
        
        $reservations->transport_cost= $request->input('transport_cost');
        $reservations->service_date= $request->input('service_date');
        $reservations->confirm_date= $request->input('confirm_date');
        $reservations->confirm_price= $request->input('confirm_price');

        

        if (auth()->user()->type=='Admin') {
            $reservations->tourleader_tour_id= $request ->input('tourleader_tour_id');
            $reservations->supplier_id= $request ->input('supplier_id');
            $reservations->tour_code= Tourleadertour::where('id','=',$request ->input('tourleader_tour_id'))->get()[0]->tour_code;

            $reservations->update();
            Session::flash('success', 'Reservation has been Updated Successfully');
            return Redirect::route('reservetransport.index');
        }else{
            $supplier = $reservations->supply->id;
            $tourLeader = $reservations->tour->id;
            $tourCode = $reservations->tour->tour_code;

            $reservations->tourleader_tour_id= $tourLeader;
            $reservations->supplier_id= $supplier;
            $reservations->tour_code= $tourCode;

            $reservations->update();
            Session::flash('success', 'Reservation has been Updated Successfully');
            return Redirect::route('reservetransport.index');
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservations = TransportReservation::find($id);
        $reservations -> delete();

        Session::flash('success', 'Reservation has been Deleted Successfully');
        return Redirect::route('reservetransport.index');
    }
}
