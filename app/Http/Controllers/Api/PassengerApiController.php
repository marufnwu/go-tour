<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\passengerInformations;
use App\Models\City;
use App\Models\Country;
use App\Models\Tourleadertour;
use App\Models\Tourleader;
use App\Models\Passengerpayment;
use App\Models\Paymentmethod;

class PassengerApiController extends Controller
{
    public function index (Request $request){

        $passenger = passengerInformations::where('email', $request->email)->first();

        $city = City::where('id', $passenger->departure_city_id)->first();

        if($city){
            $Country = Country::where('id', $city->country_id)->first();
            $Country = $Country ? $Country->country_name : 'null';
        }else {
            $Country = null;
        }

        $tour = Tourleadertour::where('id',$passenger->tourleader_tour_id)->first();
        $payments = Passengerpayment::where('passenger_id',$passenger->id)->get();
        $passengerPayments = array();

        foreach($payments as $payment){

            $currentPayment = array(
              'date'=> $payment->date_of_payment,
              'method'=> Paymentmethod::where('id',$payment->type_id)->first()->payment_method,
              'amount'=> $payment->amount,
              'references'=> $payment->payment_references
            );

            array_push($passengerPayments,$currentPayment);
        }

        $tourLeader = Tourleader::where('id',$tour->tourleader_id)->first();
        $response = array(
            'name'=> $passenger->first_name.' '.$passenger->last_name,
            'nationality' => $passenger->nationality,
            'email' => $passenger->email,
            'number' => $passenger->phone_number,
            'dcity' => $city->city_name.', '.$Country,
            'bdate' => $passenger->birth_date,
            'image' => $passenger->image,
            'tourname' => $tour->tour_name,
            'tourleadername' => $tourLeader->tlfirst_n.' '.$tourLeader->ti_l_name,
            'tourleaderEmail' => $tourLeader->th_email,
            'tourleaderNumber' => $tourLeader->th_phone,
            'tourlanguage' => $tour->language,
            'tourLedaderImage' => $tourLeader->image,
            'payments' => $passengerPayments
        );

        return response($response);
    }

}