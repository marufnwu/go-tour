<?php

namespace App\Http\Controllers\Passenger;

use App\Http\Controllers\Controller;
use App\Models\Passengerinfo;
use App\Models\Specialrequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class SpecialRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specials = [];
        $psngr = User::where('email', auth()->user()->email)->first();
        if(isset($psngr->id)) {
            $specials = Specialrequest::where('passenger_id', $psngr->id)->get();
        }
        return view('passenger.special_request.index', compact('specials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('passenger.special_request.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email_data = Passengerinfo::select('id')->where('email', auth()->user()->email)->first();        
     

        $cond = ['passenger_id' => $email_data->id];
        $data = [
            'passenger_id' => $email_data->id,
            'special_request' => $request ->input('special_request'),
        ];
        Specialrequest::updateOrCreate($cond, $data);
        Session::flash('success', 'Fee has been Added Successfully');
        return Redirect::route('special_request.create');
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
        return view('passenger.special_request.edit');
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
}
