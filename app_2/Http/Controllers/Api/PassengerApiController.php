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
    public function index (Request $request)
    {
        $passenger = passengerInformations::where('email', $request->email)->first();
        if (!$passenger) return response(array("not found"), 404);

        list($city,$country) = $this->getCitesAndCountries($passenger);

        $tour = Tourleadertour::where('id',$passenger->tourleader_tour_id)->first();
        $passengerPayments =  $this->getPayments($passenger);

        $tourLeader = $tour ? Tourleader::where('id',$tour->tourleader_id)->first() : null;
        $response = array(
            'name'=> $passenger->first_name.' '.$passenger->last_name,
            'nationality' => $passenger->nationality,
            'email' => $passenger->email,
            'number' => $passenger->phone_number,
            'dcity' => $city.', '.$country,
            'bdate' => $passenger->birth_date,
            'image' => $passenger->image,
            'tour_id' => $tour->id ?? null,
            'tourname' => $tour->tour_name ?? null,
            'tourleadername' => ($tourLeader->tlfirst_n ?? null ).' '. ($tourLeader->ti_l_name ?? null),
            'tourleaderEmail' => $tourLeader->th_email ?? null,
            'tourleaderNumber' => $tourLeader->th_phone ?? null,
            'tourlanguage' => $tour->language ?? null,
            'tourLedaderImage' => $tourLeader->image ?? null,
            'payments' => $passengerPayments
        );

        return response($response);
    }

    public function getPayments($passenger)
    {
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

        return $passengerPayments;
    }
    public function getCitesAndCountries($passenger)
    {
        $country = null;
        $city = City::where('id', $passenger->departure_city_id)->first();
        $country = $city ?  Country::where('id', $city->country_id)->first() : null;

        return [$city ? $city->city_name : null, $country ? $country->country_name : null ];
    }

}