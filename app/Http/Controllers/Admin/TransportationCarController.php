<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transportationcar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TransportationCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Transportationcar::all();
        return view('admin.pages.transportation_car_type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.transportation_car_type.add');
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
            'type_name' => 'required | min:5',
        ]);

        $types = new Transportationcar();
        $types->type_name= $request ->input('type_name');

        $types->save();
        Session::flash('success', 'Car Type has been Added Successfully');
        return Redirect::route('cartype.create');
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
        $types = Transportationcar::find($id);
        return view('admin.pages.transportation_car_type.edit', compact('types'));
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
            'type_name' => 'required | min:5',
        ]);
        $types = Transportationcar::find($id);
        $types->type_name= $request ->input('type_name');


        $types->update();
        Session::flash('success', 'Car Type has been Updated Successfully');
        return Redirect::route('cartype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $types = Transportationcar::find($id);
        $types -> delete();
        
        Session::flash('success', 'Car Type has been Deleted Successfully');
        return Redirect::route('cartype.index');
    }
}
