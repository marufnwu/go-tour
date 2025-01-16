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
        $passenger = passengerInformations::where('email', $request->email)->first();
        
        if (!$passenger) return response(array("not found"), 404);
        $ticket = Airticket::where('passenger_id', $passenger->id)->get();
        $tickets = array();
        foreach ($ticket as $ticketItem){
            
            list($dcity,$acity,$dCountry,$aCountry) = $this->getCitesAndCountries($ticketItem);
            $airline = Supplier::where('id', $ticketItem->airline)->first();

            $singleTicket = array(
                'id' => $ticketItem->id,
                'airline'=>  $airline->s_first_name ?? null,
                'airlinePhone' => $airline->s_phone ?? null,
                'airlineEmail' => $airline->s_email ?? null,
                'dcity' => array( $dcity , $dCountry ),
                'acity' => array( $acity , $aCountry ),
                'ticketPnr' => $ticketItem->ticket_pnr,
                'flightCode' => $ticketItem->flight_code,
                'ddate' => $ticketItem->departure_date_time,
                'adate' => $ticketItem->arrival_date_time,

            );
            array_push($tickets,$singleTicket);
        }

        return response($tickets);
    }

    public function getCitesAndCountries($ticketItem)
    {
        $dCountry = null;
        $aCountry = null;
        $dcity = City::where('id', $ticketItem->city_of_depart)->first();
        $acity = City::where('id', $ticketItem->city_of_arrival)->first();
        
        $dCountry = $dcity ? Country::where('id', $dcity->country_id)->first() : null;
        $aCountry = $acity ? Country::where('id', $acity->country_id)->first() : null;

        return [
            $dcity ? $dcity->city_name : null,
            $acity ? $acity->city_name : null, 
            $dCountry ? $dCountry->country_name : null,
            $aCountry ? $aCountry->country_name : null
        ];
    } 
}
