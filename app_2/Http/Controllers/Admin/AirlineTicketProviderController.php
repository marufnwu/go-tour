<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Atp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AirlineTicketProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketproviders = Atp::all();

        return view('admin.pages.airline_ticket_provider.index', compact('ticketproviders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.airline_ticket_provider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticketproviders = new Atp();

        $ticketproviders->atp_first_name= $request ->input('atp_first_name');
        $ticketproviders->atp_last_name= $request->input('atp_last_name');
        $ticketproviders->atp_company_name= $request->input('atp_company_name');
        $ticketproviders->atp_email= $request->input('atp_email');
        $ticketproviders->atp_phone= $request->input('atp_phone');
        $ticketproviders->atp_cell_number= $request->input('atp_cell_number');

        $ticketproviders->save();

        Session::flash('success', 'Airline Ticket Provider has been Added Successfully');
        return Redirect::route('ticketprovider.create');
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
        $ticketproviders = Atp::find($id);
        return view('admin.pages.airline_ticket_provider.edit', compact('ticketproviders'));
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
        $ticketproviders = Atp::find($id);

        $ticketproviders->atp_first_name= $request ->input('atp_first_name');
        $ticketproviders->atp_last_name= $request->input('atp_last_name');
        $ticketproviders->atp_company_name= $request->input('atp_company_name');
        $ticketproviders->atp_email= $request->input('atp_email');
        $ticketproviders->atp_phone= $request->input('atp_phone');
        $ticketproviders->atp_cell_number= $request->input('atp_cell_number');

        $ticketproviders->update();

        Session::flash('success', 'Airline Ticket Provider has been Updated Successfully');
        return Redirect::route('ticketprovider.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticketproviders = Atp::find($id);
        $ticketproviders ->delete();
        
        Session::flash('success', 'Airline Ticket Provider has been Deleted Successfully');
        return Redirect::route('ticketprovider.index');
    
    }
}
