<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\passengerInformations;


class PassengerIdController extends Controller
{
    //
    public function index(Request $request){

        $passenger = passengerInformations::where('email',$request->email)->first();

        if ($passenger) {
            $response = array(
                "tour_id"=>$passenger->tourleader_tour_id,
            );
        }else $response = array(
            "tour_id"=> null
        );

        return $response;
    }
   
}
