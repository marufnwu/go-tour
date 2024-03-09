<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paymentmethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $methods = Paymentmethod::all();
        return view('admin.pages.passenger_method.index', compact('methods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.passenger_method.add');
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
            'payment_method' => 'required | min:2 ',
        ]); 
        $methods = new Paymentmethod();
        $methods -> payment_method = $request->input('payment_method');

        $methods -> save();

        Session::flash('success', 'Payment Method has been Added Successfully');
        return Redirect::route('method_payment.create');
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
        $methods = Paymentmethod::find($id);
        return view('admin.pages.passenger_method.edit', compact('methods'));
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
            'payment_method' => 'required | min:2 ',
        ]); 
        $methods = Paymentmethod::find($id);
        $methods -> payment_method = $request->input('payment_method');

        $methods->update();
        Session::flash('success', 'Payment Method has been Updated Successfully');
        return Redirect::route('method_payment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $methods= Paymentmethod::find($id);
        $methods-> delete();
        
        Session::flash('success', 'Payment Method has been Deleted Successfully');
        return Redirect::route('method_payment.index');
    }
}
