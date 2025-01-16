<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TourRoom;
use App\Models\User;
use App\Models\passengerInformations;
use App\Http\Requests\Api\TourApiRequest;

class TourRoomApiController extends Controller
{

    
    public function index(TourApiRequest $request)
    {   
        $tour = TourRoom::where('tour_id', $request->tour_id)->first();
        $tour ?  $response = array('name'=> $tour) :  $response = array( 'name'=> 'not found, tour room does not exist');

        return response($response, $tour ? 200 : 404);
    }

    public function create(Request $request)
    {   

        $valideData = $request->validate([
            'tour_id' => 'required',
            'rtc_data' => 'required',
            'is_active' => 'required',
            'token'  => 'required'
        ]);

        $tour_room = new TourRoom();

        $tour_room->tour_id= $request ->input('tour_id');
        $tour_room->rtc_data= $request ->input('rtc_data');
        $tour_room->is_active= $request ->input('is_active');

        $tour_room->save();

        $response = array(
            'name'=>"created sucessfully",
        );
        return response($response,201);
    }

    public function destroy(Request $request)
    {   

        $valideData = $request->validate([
            'tour_id' => 'required',
            'token'  => 'required'
        ]);

        $tour_room = TourRoom::where('tour_id', $request->tour_id)->first();

        if($tour_room) {
            $tour_room->delete();

            $response = array(
                'name'=>"deleted sucessfully",
            );

            return response($response,200);
        }

        
        $response = array(
            'name'=> 'not found, tour room does not exist',
        );

        return response($response,404);
        

    }

    public function update(Request $request)
    {   

        $valideData = $request->validate([
            'tour_id' => 'required',
            'rtc_data' => 'required',
            'is_active' => 'required',
            'token'  => 'required'
        ]);

        $tour_room = TourRoom::where('tour_id', $request->tour_id)->first();

        if($tour_room) {
            $tour_room->rtc_data= $request ->input('rtc_data');
            $tour_room->is_active= $request ->input('is_active');

            $tour_room->update();

            $response = array(
                $tour_room
            );

            return response($response,200);
        }

        $response = array(
            'name'=> 'not found, tour room does not exist',
        );

        return response($response,404);        
    }
    
}
