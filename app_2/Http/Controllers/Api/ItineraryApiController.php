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
use App\Models\Mediaassign;

class ItineraryApiController extends Controller
{
    public function index (Request $request){
        $passenger = passengerInformations::where('email', $request->email)->first();
        if (!$passenger) return response(array("not found"), 404);

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
                    $sightMedia = Mediaassign::where('sight_id',$day->sight_id)->first();
                    $media_link = $sightMedia ? json_decode($sightMedia->media_link) : null;
                    $activityDay = array(
                        'position'=> $day->position ?? null,
                        'day'=>$day->day_itinerary ?? null,
                        'activity'=> $activity->activity_name ?? null,
                        'location' => ($city->city_name ?? null) .', '.($country->country_name ?? null),
                        'sight' => array(
                            'name' => $sight->sight_name ?? null,
                            'description' => $media_link ? $media_link->esdescription : null,
                            'video' =>  $media_link ? $media_link->esvideo : null,
                            'img1' => $media_link ? $media_link->img1 : null,
                            'img2' => $media_link ? $media_link->img2 : null,
                            'img3' => $media_link ? $media_link->img3 : null,
                            'img4' => $media_link ? $media_link->img4 : null,
                            'img5' => $media_link ? $media_link->img5 : null,
                            'img6' => $media_link ? $media_link->img6 : null,
                        )
                    );

                    array_push($currentItineraryDay,$activityDay);
                }else continue;
            }   
            array_push($dayItineraries,array('id'=>$i,'cont'=>$currentItineraryDay));
        }
     
        return response($dayItineraries);
    }
}

