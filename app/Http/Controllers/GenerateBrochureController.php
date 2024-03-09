<?php

namespace App\Http\Controllers;

use App\Models\generate_brochure;
use App\Models\Tourleader;
use App\Models\Tourleadertour;
use App\Models\Gti;
use App\Models\Sight;
use App\Models\Dayitinerary;
use App\Models\Activity;
use PDF;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GenerateBrochureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = auth()->user()->email;
        $tourLeader = Tourleader::where('th_email','=',$user)->first();

        if($tourLeader){
            $brochures = generate_brochure::where('tour_leader_id','=',$tourLeader->id)->get();
        }else $brochures = [];

       
        return view('leader.generate_brochure.index',compact('brochures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user()->email;
        $tourLeader = Tourleader::where('th_email','=',$user)->first()->id;

        $tourLeadertour = Tourleadertour::where('tourleader_id','=',$tourLeader)->get();

        if (count($tourLeadertour) > 0) {
            return view('leader.generate_brochure.add');
        }else{
            Session::flash('warning', 'You can´t create a brochure if you are not asigned to any tour.');
            return Redirect::route('generate_brochure.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valideData = $request->validate([
            'language' => 'required | numeric',
            'departure_city' => 'required | string',
            'tour_cost' => 'required | numeric',
            'departure_date' => 'required | date',
            'arrival_date' => 'required | date',
            'invitation' => 'required | string',
            'profile_image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $brochure = new generate_brochure();

        $brochure->language= $request ->input('language');
        $brochure->departure_city= $request ->input('departure_city');
        $brochure->tour_cost= $request ->input('tour_cost');
        $brochure->departure_date= $request ->input('departure_date');
        $brochure->arrival_date= $request ->input('arrival_date');
        $brochure->invitation= $request ->input('invitation');

        if ($request->hasFile('profile_image_path')) {
            $image = $request->file('profile_image_path');

            $croppedImage = Image::make($image)->fit(500, 500);

            // Generate a unique filename for the cropped image, e.g., using a timestamp
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Store the cropped image in a public directory
            $croppedImage->save(public_path('uploads/brochures/' . $filename));

            $brochure->profile_image_path= $filename;

            $user = auth()->user()->email;
            $tourLeader = Tourleader::where('th_email','=',$user)->first();

            $brochure->tour_leader_id = $tourLeader->id;

            $brochure->save();
            Session::flash('success', 'Brochure has been Added Successfully');
            return Redirect::route('generate_brochure.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = generate_brochure::find($id);

        $tourLeadertour = Tourleadertour::where('tourleader_id','=',$data->tour_leader_id)->first()->gti_id;

        $country = Dayitinerary::where('gti_id','=',$tourLeadertour)->get();

        $countriesList = [];

        foreach ($country as $countries) {
            if (!in_array($countries->country_id,$countriesList)) array_push($countriesList,$countries->country_id);
        }

        $sights = [];

        foreach ($countriesList as $key => $value) {
            $sightSet = Sight::where('country_id','=',$value)->get();
            
            array_push($sights,$sightSet);
        }

        $finalSight = [];
        foreach ($sights as $key => $value) {
            foreach ($value as $skey => $svalue) {
                if (count($finalSight)<= 40) {
                     array_push($finalSight, $svalue);
                }else break;
               
            }
        }

        $gti = Gti::where('id','=',$tourLeadertour)->first();
   
        $dayIts = Dayitinerary::where('gti_id','=',$tourLeadertour)
                                      ->orderBy('position','asc')->get();

        $asset = asset('/');
        
        $pdf = PDF::loadView('leader.generate_brochure.template', compact('data','gti','dayIts','finalSight','asset'));
        return $pdf->stream('data.pdf'); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brochures = generate_brochure::find($id);

        return view('leader.generate_brochure.edit',compact('brochures'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $valideData = $request->validate([
            'language' => 'required | numeric',
            'departure_city' => 'required | string',
            'tour_cost' => 'required | numeric',
            'departure_date' => 'required | date',
            'arrival_date' => 'required | date',
            'invitation' => 'required | string',
            'profile_image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048' ,
        ]);

        $brochure = generate_brochure::find($id);

        $brochure->language= $request ->input('language');
        $brochure->departure_city= $request ->input('departure_city');
        $brochure->arrival_date= $request ->input('arrival_date');
        $brochure->tour_cost= $request ->input('tour_cost');
        $brochure->departure_date= $request ->input('departure_date');
        $brochure->invitation= $request ->input('invitation');

        if ($request->hasFile('profile_image_path')) {
            $image = $request->file('profile_image_path');

            File::delete(public_path('uploads/brochures/'.$brochure->profile_image_path));

            $croppedImage = Image::make($image)->fit(500, 500);

            $filename = time() . '.' . $image->getClientOriginalExtension();

            $croppedImage->save(public_path('uploads/brochures/' . $filename));

            $brochure->profile_image_path= str_replace('public/uploads/brochures/','',$filename);
        } 

        $user = auth()->user()->email;
        $tourLeader = Tourleader::where('th_email','=',$user)->first();

        $brochure->tour_leader_id = $tourLeader->id;

        $brochure->update();
        Session::flash('success', 'Brochure has been Added Successfully');
        return Redirect::route('generate_brochure.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $brochure = generate_brochure::find($id);

        File::delete(public_path('uploads/brochures/'.$brochure->profile_image_path));
        
        $brochure -> delete();
        
        Session::flash('success', 'Activity has been Deleted Successfully');
        return Redirect::route('generate_brochure.index');
    }
}
