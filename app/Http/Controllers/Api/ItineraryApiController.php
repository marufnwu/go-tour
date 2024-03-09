<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\passengerInformations;
use App\Models\City;
use App\Models\Country;
use App\Models\Dayitinerary;
use App\Models\Sight;
use App\Models\Activity;
use App\Models\Gti;
use App\Models\Tourleadertour;

class ItineraryApiController extends Controller
{
    public function index (Request $request){

        $passenger = passengerInformations::where('email', $request->email)->first();
        $tour = Tourleadertour::where('tour_code',$passenger->tour_code)->first();
        $gti = Gti::where('id',$tour->gti_id)->first();
        $dayItinerary = Dayitinerary::where('gti_id',$gti->id)->orderBy('position')->get();
        
        $dayItineraries = array();

        for ($i = 1; $i <= $gti->gti_total_days; $i++){
            $currentItineraryDay = array(); 

            foreach($dayItinerary as $day){
                if($day->day_itinerary == $i){
                    $activity = Activity::where('id',$day->activity_id)->first();
                    $city = City::where('id',$day->city_id)->first();
                    $country = Country::where('id',$day->country_id)->first();
                    $sight = Sight::where('id',$day->sight_id)->first();

                    $activityDay = array(
                        'position'=> $day->position,
                        'day'=>$day->day_itinerary,
                        'activity'=> $activity->activity_name,
                        'location' => $city->city_name.', '.$country->country_name,
                        'sight' => array($sight->sight_name,$sight->sights_description)

                    );

                    array_push($currentItineraryDay,$activityDay);
                }else continue;
            }   
            array_push($dayItineraries,array('id'=>$i,'cont'=>$currentItineraryDay));
        }
     
        return response($dayItineraries);
    }
}

