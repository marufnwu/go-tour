<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Passengerpayment;
use App\Models\passengerInformations;
use App\Models\Tourleadertour;
use App\Models\Tourleader;
use Illuminate\Support\Facades\DB;

class FinancialReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->type =='Passenger') {
            $data = passengerInformations::where('email', auth()->user()->email)->first();

            if(isset($data->id)) {
                $reports = Passengerpayment::where('passenger_id', $data->id)->select('passenger_id', DB::raw('SUM(amount) as total_payment'), DB::raw('MAX(date_of_payment) as date_of_payment'))
                ->groupBy('passenger_id')->get();
            }
            return view('admin.pages.passenger_report.index', compact('reports'));
        } elseif (auth()->user()->type =='Leader'){
            $leader = auth()->user()->email;
            $tourleader = Tourleader::where('th_email','=',$leader)->first()->id;
            $tourleadertour = Tourleadertour::where('tourleader_id','=',$tourleader)->first();

            if ($tourleadertour) {
                $reports = Passengerpayment::where('tourleader_tour_id','=',$tourleadertour->id)->get();
            }else $reports = [];
        
            return view('admin.pages.passenger_report.index', compact('reports'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
