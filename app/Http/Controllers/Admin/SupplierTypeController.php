<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Suppliertype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SupplierTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliertypes = Suppliertype::all();
        return view('admin.pages.supplier_type.index', compact('suppliertypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.supplier_type.add');
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
            'supplier_type' => 'required | min:5 | regex:/^[\pL\s\-]+$/u',
            'user_type' => 'required'
        ]);
        $suppliertypes = new Suppliertype();
        $suppliertypes->supplier_type= $request->input('supplier_type');
        $suppliertypes->user_type= $request->input('user_type');


        $suppliertypes->save();
        Session::flash('success', 'Supplier Type has been Added Successfully');
        return Redirect::route('type_supplier.create');
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
        $suppliertypes = Suppliertype::find($id);
        return view('admin.pages.supplier_type.edit', compact('suppliertypes'));
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
            'supplier_type' => 'required | min:5 | regex:/^[\pL\s\-]+$/u',
            'user_type' => 'required'
        ]);
        
        $suppliertypes = Suppliertype::find($id);
        $suppliertypes->supplier_type= $request->input('supplier_type');
        $suppliertypes->user_type= $request->input('user_type');

        $suppliertypes->update();
        Session::flash('success', 'Supplier Type has been Updated Successfully');
        return Redirect::route('type_supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suppliertypes = Suppliertype::find($id);
        $suppliertypes -> delete();

        Session::flash('success', 'Supplier Type has been Deleted Successfully');
        return Redirect::route('type_supplier.index');
    }
}
