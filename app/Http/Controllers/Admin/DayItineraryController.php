<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dayitinerary;
use App\Models\City;
use App\Models\Country;
use App\Models\Gti;

use App\Models\passengerInformations;
use App\Models\Tourleadertour;
use App\Models\Tourleader;

use App\Models\Activity;
use App\Models\Airport;
use App\Models\Sight;
use App\Models\Sightdistant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DayItineraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if ( auth()->user()->type=='Admin' || auth()->user()->type=='OP')$itineraries = Dayitinerary::all();

        elseif (auth()->user()->type=='Passenger') {
           $passengerEmail = auth()->user()->email;

           $getPassenger = passengerInformations::where('email', '=',$passengerEmail)->first()->tourleader_tour_id;

           $gti_id = Tourleadertour::where('id','=',$getPassenger)->first();

           if ($gti_id) {
               $user_gti = Gti::where('id','=',$gti_id->gti_id)->first()->id;
               $itineraries = Dayitinerary::where('gti_id','=',$user_gti)->orderBy('updated_at', 'desc')->get();
           }else $itineraries = [];
           

           
        }elseif (auth()->user()->type=='Leader'){
            
            $leaderEmail = auth()->user()->email; 

            $tourLeader = Tourleader::where('th_email','=',$leaderEmail)->first()->id;

            $tourLeaderTour = Tourleadertour::where('tourleader_id','=',$tourLeader)->first();

            if ($tourLeaderTour) {
                $itineraries = Dayitinerary::where('gti_id','=',$tourLeaderTour->gti_id)->orderBy('updated_at', 'desc')->get();
            }else $itineraries = [];

            
        }

        //dd($itineraries[0]->act);

        return view('admin.pages.day_itinerary.index', compact('itineraries'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gtis = Gti::orderBy('gti_name','asc')->get();
        $cities = City::orderBy('city_name','asc')->get();
        $countries = Country::orderBy('country_name','asc')->get();
        $activities = Activity::orderBy('activity_name','asc')->get();
        $sights = Sight::orderBy('sight_name','asc')->get();
        $airports = Airport::orderBy('airport_name','asc')->get();
        $distance = Sightdistant::orderBy('distant_sight_name','asc')->get();
  
        return view('admin.pages.day_itinerary.add', compact(
            'cities', 'countries', 'gtis',
            'airports', 'sights', 'activities',
            'distance'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valideData = $request->validate([
            'day_itinerary' => 'required',
            'gti_id' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'sight_id' => 'required',
            'sight_distant_id' => 'required',
            'activity_id' => 'required'
        ]);

        $itineraries = new Dayitinerary();
        
        $itineraries->day_itinerary= $request ->input('day_itinerary');
        $itineraries->gti_id= $request->input('gti_id');
        $itineraries->country_id= $request->input('country_id');
        $itineraries->city_id= $request->input('city_id');
        $itineraries->sight_id= $request->input('sight_id');
        $itineraries->sight_distant_id= $request->input('sight_distant_id');
        $itineraries->airport_id= $request->input('airport_id');
        $itineraries->activity_id= $request->input('activity_id');
        $itineraries->position= $request ->input('position');


        $itineraries-> save();

        Session::flash('success', 'Day Itinerary has been Added Successfully');
        return Redirect::route('itinerary.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itineraries = Dayitinerary::find($id);
        $gtis = Gti::orderBy('gti_name','asc')->get();
        $cities = City::orderBy('city_name','asc')->get();
        $countries = Country::orderBy('country_name','asc')->get();
        $activities = Activity::orderBy('activity_name','asc')->get();
        $sights = Sight::orderBy('sight_name','asc')->get();
        $airports = Airport::orderBy('airport_name','asc')->get();
        $distance = Sightdistant::orderBy('distant_sight_name','asc')->get();

       

        $days = Gti::where('id','=',$itineraries->gti_id)->first();

        if ($days) {
            $days = $days->gti_total_days;
        }else null;
        
        return view('admin.pages.day_itinerary.edit', compact(
            'cities', 'countries', 'gtis',
            'airports', 'sights', 'activities',
            'distance', 'itineraries','days'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valideData = $request->validate([
            'day_itinerary' => 'required',
            'gti_id' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'sight_id' => 'required',
            'sight_distant_id' => 'required',
            'activity_id' => 'required'
        ]);
        $itineraries = Dayitinerary::find($id);

        $itineraries->day_itinerary= $request ->input('day_itinerary');
        $itineraries->gti_id= $request->input('gti_id');
        $itineraries->country_id= $request->input('country_id');
        $itineraries->city_id= $request->input('city_id');
        $itineraries->sight_id= $request->input('sight_id');
        $itineraries->sight_distant_id= $request->input('sight_distant_id');
        $itineraries->airport_id= $request->input('airport_id');
        $itineraries->activity_id= $request->input('activity_id');
        $itineraries->position= $request ->input('position');

        $itineraries->update();

        Session::flash('success', 'Day Itinerary has been Updated Successfully');
        return Redirect::route('itinerary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itineraries = Dayitinerary::find($id);
        $itineraries ->delete();
        
        Session::flash('success', 'Day Itinerary has been Deleted Successfully');
        return Redirect::route('itinerary.index');
    }
}
