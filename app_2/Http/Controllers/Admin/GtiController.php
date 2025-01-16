<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gti;
use App\Models\Dayitinerary;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class GtiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gtis = Gti::all();
        return view('admin.pages.general_tour_itinerary.index', compact('gtis'));
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.general_tour_itinerary.add');
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
            'gti_name' => 'required',
            'gti_total_days' => 'required | numeric | min:1',
            'hotel_days' => 'required',
            'includes_flight' => 'required',
            'hotel_stars' => 'required',
            'meals' => 'required | string',
            'include_guide' => 'required',
            'includes_sight' => 'required',
            'includes_transport' => 'required'
        ]);

        $gtis = new Gti();
        $gtis->gti_name= $request ->input('gti_name');
        $gtis->gti_total_days= $request ->input('gti_total_days');
        $gtis->hotel_days= $request ->input('hotel_days');
        $gtis->includes_flight= $request ->input('includes_flight');
        $gtis->first_flight= $request ->input('first_flight');
        $gtis->second_flight= $request ->input('second_flight');
        $gtis->third_flight= $request ->input('third_flight');
        $gtis->hotel_stars= $request ->input('hotel_stars');
        $gtis->meals= $request ->input('meals');
        $gtis->include_guide= $request ->input('include_guide');
        $gtis->includes_sight= $request ->input('includes_sight');
        $gtis->includes_transport= $request ->input('includes_transport');

        $gtis->save();

        Session::flash('success', 'GTI has been Added Successfully');
        return Redirect::route('gti.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gti = Gti::where('id','=',$id)->first();
        $dayIts = Dayitinerary::where('gti_id','=',$id)
                            ->orderBy('position','asc')->get();
        
        $pdf = PDF::loadView('admin.pages.general_tour_itinerary.template', compact('gti','dayIts'));
        return $pdf->stream('data.pdf'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gtis = Gti::find($id);

        
        return view('admin.pages.general_tour_itinerary.edit', compact('gtis'));
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
            'gti_name' => 'required',
            'gti_total_days' => 'required | numeric | min:1',
            'hotel_days' => 'required',
            'includes_flight' => 'required',
            'hotel_stars' => 'required',
            'meals' => 'required | string',
            'include_guide' => 'required',
            'includes_sight' => 'required',
            'includes_transport' => 'required'
        ]);

        $gtis = Gti::find($id);

        $gtis->gti_name= $request ->input('gti_name');
        $gtis->gti_total_days= $request ->input('gti_total_days');
        $gtis->hotel_days= $request ->input('hotel_days');
        $gtis->includes_flight= $request ->input('includes_flight');
        $gtis->first_flight= $request ->input('first_flight');
        $gtis->second_flight= $request ->input('second_flight');
        $gtis->third_flight= $request ->input('third_flight');
        $gtis->hotel_stars= $request ->input('hotel_stars');
        $gtis->meals= $request ->input('meals');
        $gtis->include_guide= $request ->input('include_guide');
        $gtis->includes_sight= $request ->input('includes_sight');
        $gtis->includes_transport= $request ->input('includes_transport');

        $gtis->update();
        
        Session::flash('success', 'Gti has been Updated Successfully');
        return Redirect::route('gti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gtis = Gti::find($id);
        $gtis->delete();
        Session::flash('success', 'Gti has been Deleted Successfully');
        return Redirect::route('gti.index');
    }

    //ajax
    public function get_gti_total_days($id)
    {
        $gti = Gti::find($id);
        return  $gti->gti_total_days ? $gti->gti_total_days : 0;
    }
}
