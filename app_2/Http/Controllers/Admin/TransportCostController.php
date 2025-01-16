<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transportationcar;
use App\Models\Transportcost;
use App\Models\Transporttype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TransportCostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costs = Transportcost::all();
        return view('admin.pages.transport_cost.index', compact('costs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costs = Transportcost::all();
        $cars = Transportationcar::all();
        $types = Transporttype::all();
        //dd($cars);
        return view('admin.pages.transport_cost.add', compact('costs', 'cars', 'types'));
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
            'car_type_id' => 'required',
            'transport_type_id' => 'required',
            'cost' => 'required | min:1 | numeric'
        ]);
        $costs = new Transportcost();
        $costs->car_type_id= $request ->input('car_type_id');
        $costs->transport_type_id= $request ->input('transport_type_id');
        $costs->cost= $request ->input('cost');
        
        $costs->save();
        Session::flash('success', 'Transport Cost has been Added Successfully');
        return Redirect::route('cost_transport.create');
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
        $costs = Transportcost::find($id);
        $cars = Transportationcar::all();
        $types = Transporttype::all();
        return view('admin.pages.transport_cost.edit', compact('costs', 'cars', 'types'));
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
            'car_type_id' => 'required',
            'transport_type_id' => 'required',
            'cost' => 'required | min:1 | numeric'
        ]);

        $costs = Transportcost::find($id);
        $costs->car_type_id= $request ->input('car_type_id');
        $costs->transport_type_id= $request ->input('transport_type_id');
        $costs->cost= $request ->input('cost');

        $costs->update();
        
        Session::flash('success', 'Transport Cost has been Updated Successfully');
        return Redirect::route('cost_transport.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $costs = Transportcost::find($id);
        $costs -> delete();
        
        Session::flash('success', 'Transport Cost has been Deleted Successfully');
        return Redirect::route('cost_transport.index');
    }
}
