<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\passengerInformations;
use App\Models\Tourleadertour;

class HotelApiController extends Controller
{
    public function index (Request $request){

        $passenger = passengerInformations::where('email', $request->email)->first();
        $tour = Tourleadertour::where('tour_code', $passenger->tour_code)->first()->id;
        $hotelR = Reservation::where('tourleader_tour_id', $tour)->get();

        $reservations = array();

         foreach ($hotelR as $reservation){
            if (!in_array($reservation->hotel_id,$reservations)){
                array_push($reservations,$reservation->hotel_id);
            }
        }
        $hotels = Hotel::whereIn('id', $reservations)->get();

        $hotel = array();

        foreach ($hotels as $hotelItem){
            $hotelRes = Reservation::where('hotel_id', $hotelItem->id)->first();

            $singleHotel = array(
                'id'=>$hotelItem->id,
                'name'=> $hotelItem->hotel_name,
                'adress' => $hotelItem->hotel_address.' '.$hotelItem->hotel_city.' '.$hotelItem->hotel_country,
                'phone' => $hotelItem->hotel_phone,
                'email' => $hotelItem->hotel_address,
                'hotel_email' => $hotelItem->hotel_address,
                'image' => $hotelItem->image,
                'fromD' => $hotelRes->from_date,
                'toD' => $hotelRes->to_date

            );
            array_push($hotel,$singleHotel);
        }

        return response($hotel);
    }
}