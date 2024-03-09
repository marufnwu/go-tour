<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Tourleadertour;
use App\Models\Tourleader;
use App\Models\passengerInformations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->type=='CHCP' || auth()->user()->type=='Admin'){
            $reservations = Reservation::all();
        }elseif (auth()->user()->type=='Passenger')  {
            $user = auth()->user()->email;
            $passenger = passengerInformations::where('email','=',$user)->first()->tourleader_tour_id;

            $reservations = Reservation::where('tourleader_tour_id','=',$passenger)->get();

        }elseif (auth()->user()->type=='Leader') {
            $user = auth()->user()->email;
            $leader = Tourleader::where('th_email','=',$user)->first()->id;

            $tourID = Tourleadertour::where('tourleader_id','=',$leader)->first()->id;

            $reservations = Reservation::where('tourleader_tour_id','=',$tourID)->get();
        }elseif (auth()->user()->type=='Hotel') {
            $user = auth()->user()->email;
            $hotel = Hotel::where('hotel_email','=',$user)->first();

            $reservations = Reservation::where('hotel_id','=',$hotel->id)->get();
        }

        return view('admin.pages.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        $tours = Tourleadertour::all();

        return view('admin.pages.reservation.add',compact('hotels','tours'));
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
            'hotel_id' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'single_room' => 'required | numeric | min:0',
            'double_room' => 'required | numeric | min:0',
            'triple_room' => 'required | numeric | min:0' ,
            'single_room_price' => 'required | numeric | min:1',
            'double_room_price' => 'required | numeric | min:1',
            'triple_room_price' => 'required | numeric | min:1',
            'reservation_date' => 'required'
        ]);

        $reservations = new Reservation();
        $reservations->hotel_id= $request ->input('hotel_id');
        $reservations->tourleader_tour_id= $request ->input('tourleader_tour_id');
        $reservations->from_date= $request ->input('from_date');
        $reservations->to_date= $request ->input('to_date');
        $reservations->single_room= $request ->input('single_room');
        $reservations->double_room= $request ->input('double_room');
        $reservations->triple_room= $request ->input('triple_room');
        
        $reservations->single_room_price = $request ->input('single_room_price');
        $reservations->double_room_price = $request ->input('double_room_price');
        $reservations->triple_room_price = $request ->input('triple_room_price');
        
        $reservations->reservation_date= $request ->input('reservation_date');
        $reservations->confirmation_date= $request ->input('confirmation_date');

        $tourleadertour = Tourleadertour::where('id','=',$request->tourleader_tour_id)->first();

        $reservations->total_passenger=$tourleadertour->passengers;

        $reservations->save();

        Session::flash('success', 'Reservation has been Added Successfully');
        return Redirect::route('reservation.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm($id)
    {
        $data = Reservation::find($id);
        $data->confirmation_date= now();
        $data->update();

        Session::flash('success', 'Reservation has been confirmed Successfully');
        return Redirect::route('reservation.index');
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

        $valideData = $request->validate([
            'tourleader_tour_id' => 'required',
            'hotel_id' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'single_room' => 'required | numeric | min:0',
            'double_room' => 'required | numeric | min:0',
            'triple_room' => 'required | numeric | min:0' ,
            'single_room_price' => 'required | numeric | min:1',
            'double_room_price' => 'required | numeric | min:1',
            'triple_room_price' => 'required | numeric | min:1',
            'reservation_date' => 'required',
        ]);
        
        $reservations = Reservation::find($id);
        if($request ->input('hotel_id')){
            $reservations->hotel_id= $request ->input('hotel_id');
        }
        $reservations->tourleader_tour_id= $request ->input('tourleader_tour_id');
        $reservations->from_date= $request ->input('from_date');
        $reservations->to_date= $request ->input('to_date');
        $reservations->single_room= $request ->input('single_room');
        $reservations->double_room= $request ->input('double_room');
        $reservations->triple_room= $request ->input('triple_room');

        $reservations->single_room_price = $request ->input('single_room_price');
        $reservations->double_room_price = $request ->input('double_room_price');
        $reservations->triple_room_price = $request ->input('triple_room_price');

        $reservations->reservation_date= $request ->input('reservation_date');
        $reservations->confirmation_date= $request ->input('confirmation_date');

        $tourleadertour = Tourleadertour::where('id','=',$request->tourleader_tour_id)->first();

        $reservations->total_passenger=$tourleadertour->passengers;

        $reservations->update();
        Session::flash('success', 'Reservation has been Updated Successfully');
        return Redirect::route('reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservations= Reservation::find($id);
        $reservations-> delete();
        
        Session::flash('success', 'Reservations has been Deleted Successfully');
        return Redirect::route('reservation.index');
    }
}
