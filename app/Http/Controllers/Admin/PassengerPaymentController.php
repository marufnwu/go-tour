<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\passengerInformations;
use App\Models\Passengerpayment;
use App\Models\Paymentmethod;
use App\Models\Tourleadertour;
use App\Models\Tourleader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class PassengerPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->type=='Admin' || auth()->user()->type=='OP') {
            $payments = Passengerpayment::all();
        }elseif(auth()->user()->type=='Leader'){
            $user = auth()->user()->email;

            $leader = Tourleader::where('th_email','=',$user)->first();

            $TLT = Tourleadertour::where('tourleader_id','=',$leader->id)->get();

            $payments = array();

            if($TLT){
                foreach ($TLT as $key => $tour) {
                    $paymentsSet = Passengerpayment::where('tourleader_tour_id','=',$tour->id)->get();

                    foreach ($paymentsSet as $key => $payment) {
                        array_push($payments,$payment);
                    }
                }
            }else{
                $payments = [];
            }

            //dd(Passengerpayment::all(),$TLT);
        }elseif(auth()->user()->type=='Passenger'){
            $user = auth()->user()->email;

            $passenger = passengerInformations::where('email','=',$user)->first();

            $payments = Passengerpayment::where('passenger_id','=',$passenger->id)->get();
        }
        
        return view('admin.pages.passenger_payment.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = Tourleadertour::all();
        $passengers = passengerInformations::all();
        $types = Paymentmethod::all();

        return view('admin.pages.passenger_payment.add', compact('tours','passengers','types'));
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
            'date_of_payment' => 'required',
            'passenger_id' => auth()->user()->type=='Admin' || auth()->user()->type=='OP'?'required':'',
            'type_id' => 'required',
            'amount' => 'required | min:0 | numeric', 
            'payment_references' => 'required'

        ]); 
        $payments = new Passengerpayment();

        $payments->date_of_payment= $request ->input('date_of_payment');
        $payments->type_id= $request ->input('type_id');
        $payments->amount= $request ->input('amount');
        $payments->payment_references= $request ->input('payment_references');


        if (auth()->user()->type=='Admin' || auth()->user()->type=='OP') {
            $payments->passenger_id= $request ->input('passenger_id');

            $user_id = $request ->input('passenger_id');
            $passenger = passengerInformations::where('id','=',$user_id)->get()[0]->tourleader_tour_id;
            $payments->tourleader_tour_id = $passenger;
            $payments->save();

            Session::flash('success', 'Payment has been Added Successfully');
            return Redirect::route('payment_passenger.create');

        } else {
            $usermail = Auth::user()->email;

            $payments->passenger_id = passengerInformations::where('email','=',$usermail)->get()[0]->id;
            $payments->tourleader_tour_id = passengerInformations::where('email','=',$usermail)->get()[0]->tourleader_tour_id;

            $payments->save();

            Session::flash('success', 'Payment has been Added Successfully');
            return Redirect::route('payment_passenger.create');
    
        }
        
       
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
        $payments = Passengerpayment::find($id);
        $tours = Tourleadertour::all();
        $passengers = passengerInformations::all();
        $types = Paymentmethod::all();
        return view('admin.pages.passenger_payment.edit', compact('payments','tours','passengers','types'));
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
            'date_of_payment' => 'required',
            'passenger_id' => auth()->user()->type=='Admin' || auth()->user()->type=='OP'?'required':'',
            'type_id' => 'required',
            'amount' => 'required | min:0 | numeric', 
            'payment_references' => 'required'

        ]);

        $payments = Passengerpayment::find($id);

        $payments->date_of_payment= $request ->input('date_of_payment');
        $payments->type_id= $request ->input('type_id');
        $payments->amount= $request ->input('amount');
        $payments->payment_references= $request ->input('payment_references');



        $payments->passenger_id= $request ->input('passenger_id');

        $user_id = $request ->input('passenger_id');
        $passenger = passengerInformations::where('id','=',$user_id)->get()[0]->tourleader_tour_id;
        $payments->tourleader_tour_id = $passenger;

        $payments->update();
        Session::flash('success', 'Payment has been Updated Successfully');
        return Redirect::route('payment_passenger.index');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payments= Passengerpayment::find($id);
        $payments-> delete();

        Session::flash('success', 'Payment has been Deleted Successfully');
        return Redirect::route('payment_passenger.index');
    }
}
