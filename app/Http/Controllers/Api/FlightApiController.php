<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Airticket;
use App\Models\Supplier;
use App\Models\passengerInformations;
use App\Models\City;
use App\Models\Country;

class FlightApiController extends Controller
{
    public function index (Request $request){
        $passenger = passengerInformations::where('email', $request->email)->first()->id;
        $ticket = Airticket::where('passenger_id', $passenger)->get();
        
        $tickets = array();
        
        foreach ($ticket as $ticketItem){

            $dcity = City::where('id', $ticketItem->city_of_depart)->first();
            $acity = City::where('id', $ticketItem->city_of_arrival)->first();
            
            if($dcity){
                $dCountry = Country::where('id', $dcity->country_id)->first();
                $dCountry = $dCountry ? $dCountry->country_name : 'null';
            }else {
                $dCountry = null;
            }

            if($acity){
                $aCountry = Country::where('id', $acity->country_id)->first();
                $aCountry = $aCountry ? $aCountry->country_name : 'null';
            }else {
                $aCountry = null;
            }
            
            $airline = Supplier::where('id', $ticketItem->airline)->first();

            $singleTicket = array(
                'id' => $ticketItem->id,
                'airline'=>  $airline->s_first_name,
                'airlinePhone' => $airline->s_phone,
                'airlineEmail' => $airline->s_email,
                'dcity' => array( $dcity ? $dcity->city_name : null , $dCountry ),
                'acity' => array( $acity ? $acity->city_name : null , $aCountry ),
                'ticketPnr' => $ticketItem->ticket_pnr,
                'flightCode' => $ticketItem->flight_code,
                'ddate' => $ticketItem->departure_date_time,
                'adate' => $ticketItem->arrival_date_time,

            );
            array_push($tickets,$singleTicket);
        }

        return response($tickets);
    }
}
