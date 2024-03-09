<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use App\Models\Airticket;
use App\Models\Supplier;
use App\Models\passengerInformations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AirlineTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->type=='Admin' || auth()->user()->type=='OP') {
            
            $tickets= Airticket::all();

            return view('admin.pages.airline_ticket.index',compact('tickets'));
        }else{
            $usermail = auth()->user()->email;
        
            $airline = Supplier::where('s_email','=',$usermail)->get()[0]->id;

            $tickets = Airticket::where('airline','=',$airline)->get();
     
            return view('admin.pages.airline_ticket.index',compact('tickets'));
        }
        
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $passengers = passengerInformations::all();
        $airports = Airport::all();
        $suppliers = Supplier::where('type','=','ATP')->get();

        return view('admin.pages.airline_ticket.add', compact('passengers', 'airports','suppliers'));
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
            'passenger_id' => 'required',
            'city_of_depart' => 'required',
            'city_of_arrival' => 'required',
            'departure_date_time' => 'required',
            'arrival_date_time' => 'required',
            'ticket_pnr' => 'required',
            'airline' => 'required' ,
            'ticket_price' => 'required | numeric',
            'flight_code'=> 'required'
        ]);

        $tickets = new Airticket();
        $tickets->passenger_id= $request ->input('passenger_id');
        $tickets->city_of_depart= $request ->input('city_of_depart');
        $tickets->city_of_arrival= $request ->input('city_of_arrival');
        $tickets->departure_date_time= $request ->input('departure_date_time');
        $tickets->arrival_date_time= $request ->input('arrival_date_time');
        $tickets->ticket_pnr= $request ->input('ticket_pnr');
        $tickets->airline= $request ->input('airline');
        $tickets->ticket_price= $request ->input('ticket_price');
        $tickets->flight_code= $request ->input('flight_code');

        $tickets->save();
        Session::flash('success', 'Airline Ticket has been Added Successfully');
        return Redirect::route('ticket_list.create');
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
        $tickets = Airticket::find($id);
        $passengers = passengerInformations::all();
        $airports = Airport::all();
        $suppliers = Supplier::where('type','=','ATP')->get();
        

        return view('admin.pages.airline_ticket.edit', compact('tickets', 'passengers','airports','suppliers'));
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
            'passenger_id' => auth()->user()->type=='Admin'?'required':'',
            'city_of_depart' => 'required',
            'city_of_arrival' => 'required',
            'departure_date_time' => 'required',
            'arrival_date_time' => 'required',
            'ticket_pnr' => 'required',
            'airline' => auth()->user()->type=='Admin'?'required':'' ,
            'ticket_price' => 'required | numeric',
            'flight_code'=> 'required'
        ]);
        $tickets = Airticket::find($id);

        $tickets->city_of_depart= $request ->input('city_of_depart');
        $tickets->city_of_arrival= $request ->input('city_of_arrival');
        $tickets->departure_date_time= $request ->input('departure_date_time');
        $tickets->arrival_date_time= $request ->input('arrival_date_time');
        $tickets->ticket_pnr= $request ->input('ticket_pnr');
        $tickets->ticket_price= $request ->input('ticket_price');
        $tickets->flight_code= $request ->input('flight_code');

        if (auth()->user()->type=='Admin' || auth()->user()->type=='OP') {
            $tickets->passenger_id= $request ->input('passenger_id');
            $tickets->airline= $request ->input('airline');
        }

        $tickets->update();

        Session::flash('success', 'Airline Ticket has been Updated Successfully');
        return Redirect::route('ticket_list.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tickets= Airticket::find($id);
        $tickets-> delete();
        
        Session::flash('success', 'Airline Ticket has been Deleted Successfully');
        return Redirect::route('ticket_list.index');
    }
}
