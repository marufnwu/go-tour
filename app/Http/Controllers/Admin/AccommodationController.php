<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accommodations = Accommodation::all();
        return view('admin.pages.accommodation.index', compact('accommodations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.accommodation.add');
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
            'accommodation_type_name' => 'required | min:3'
        ]);
        $accommodations = new Accommodation();
        $accommodations->accommodation_type_name= $request ->input('accommodation_type_name');
        $accommodations->save();
        
        Session::flash('success', 'Accommodation has been Added Successfully');
        return Redirect::route('accommodation.create');
    
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
        $accommodations = Accommodation::find($id);
        return view('admin.pages.accommodation.edit', compact('accommodations'));
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
            'accommodation_type_name' => 'required | min:3'
        ]);
        $accommodations = Accommodation::find($id);
        $accommodations->accommodation_type_name= $request ->input('accommodation_type_name');

        $accommodations->update();
        Session::flash('success', 'Accommodation has been Added Successfully');
        return Redirect::route('accommodation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accommodations= Accommodation::find($id);
        $accommodations-> delete();
        
        Session::flash('success', 'Accommodation has been Deleted Successfully');
        return Redirect::route('accommodation.index');
        
    }
}
