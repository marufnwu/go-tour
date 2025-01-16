<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Airticket;
use App\Models\Supplier;
use App\Models\passengerInformations;
use App\Models\City;
use App\Models\Country;
use App\Models\Airport;

class FlightApiController extends Controller
{
    public function index (Request $request){
        $passenger = passengerInformations::where('email', $request->email)->first();
        
        if (!$passenger) return response(array("not found"), 404);

        $ticket = Airticket::where('passenger_id', $passenger->id)->get();
        
        $tickets = array();

        foreach ($ticket as $ticketItem){

            $dairport = Airport::where('id', $ticketItem->city_of_depart)->first();
            $aairport = Airport::where('id', $ticketItem->city_of_arrival)->first();

            if($dairport){
                $dcity = City::where('id',$dairport->city_id)->first();
                $dCountry = Country::where('id', $dcity->country_id)->first();

                $dcity = $dcity ? $dcity->city_name : 'null';
                $dCountry = $dCountry ? $dCountry->country_name : 'null';
                
            }else {
                $dCountry = null;
                $dcity = null;
            }

            if($aairport){
                $acity = City::where('id',$aairport->city_id)->first();
                $aCountry = Country::where('id', $acity->country_id)->first();

                $acity = $acity ? $acity->city_name : 'null';
                $aCountry = $aCountry ? $aCountry->country_name : 'null';
                
            }else {
                $aCountry = null;
                $acity = null;
            }
            
            $airline = Supplier::where('id', $ticketItem->airline)->first();

            $singleTicket = array(
                'id' => $ticketItem->id,
                'airline'=>  $airline->s_first_name,
                'airlinePhone' => $airline->s_phone,
                'airlineEmail' => $airline->s_email,
                'departure_airport' => $dairport ? $dairport->airport_name." - ".$dcity.", ".$dCountry."." : null,
                'arrival_airport' => $aairport ? $aairport->airport_name." - ".$acity.", ".$aCountry."." : null,
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
