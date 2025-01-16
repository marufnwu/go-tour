<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\passengerInformations;
use App\Models\Tourleader;
use App\Models\Guide;
use App\Models\Hotel;
use App\Models\Supplier;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.user.add');
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
            'name' => 'required | min:3',
            'phone' => 'required',
            'email' => 'required | email',
            'password' => 'required | min:8',
            // 'type' => 'required'
        ]);
        $users = new User();
        $users->name= $request ->input('name');
        $users->email= $request ->input('email');
        $users->phone= $request ->input('phone');
        $users->password= Hash::make($request ->input('password'));
        //$users->type= $request ->input('type');
        $users->type='OP';

        $users->save();
        Session::flash('success', 'Operator has been Added Successfully');
        return Redirect::route('user.create');
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
        $users = User::find($id);

        return view('admin.pages.user.edit', compact('users'));
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
        $users = User::find($id);
        $oldMail = $users->email;
        $userType = $users->type;

        $valideData = $request->validate([
            'name' => 'required | min:2',
            'phone' => 'required',
            'email' => 'required | email',
        ]);
        
        $users->name= $request ->input('name');
        $users->email= $request ->input('email');
        $users->phone= $request ->input('phone');

        if($request ->input('password')){
            $users->password= Hash::make($request ->input('password'));
        }   

        if ($userType == 'Passenger') {

            $updateUser = passengerInformations::where('email','=',$oldMail)->first();

            $updateUser->first_name = $request ->input('name');
            $updateUser->email = $request ->input('email');
            $updateUser->phone_number = $request ->input('phone');

            if($request ->input('password')){
                $updateUser->password= Hash::make($request ->input('password'));
            }   

            $updateUser->update();

        }elseif ($userType == 'Leader') {

            $updateUser = Tourleader::where('th_email','=',$oldMail)->first();

            $updateUser->tlfirst_n = $request ->input('name');
            $updateUser->th_email = $request ->input('email');
            $updateUser->th_phone = $request ->input('phone');

            if($request ->input('password')){
                $updateUser->password= Hash::make($request ->input('password'));
            }   

            $updateUser->update();

        }elseif ($userType == 'Guide') {

            $updateUser = Guide::where('guide_email','=',$oldMail)->first();

            $updateUser->guide_first_n = $request ->input('name');
            $updateUser->guide_email = $request ->input('email');
            $updateUser->guide_phone = $request ->input('phone');

            if($request ->input('password')){
                $updateUser->password= Hash::make($request ->input('password'));
            }   

            $updateUser->update();

        }elseif ($userType == 'Hotel') {

            $updateUser = Hotel::where('hotel_email','=',$oldMail)->first();

            $updateUser->hotel_name = $request ->input('name');
            $updateUser->hotel_email = $request ->input('email');
            $updateUser->hotel_phone = $request ->input('phone');

            if($request ->input('password')){
                $updateUser->password= Hash::make($request ->input('password'));
            }   

            $updateUser->update();

        }elseif ($userType == 'BC' || $userType == 'ATP') {

            $updateUser = Supplier::where('s_email','=',$oldMail)->first();

            $updateUser->s_first_name = $request ->input('name');
            $updateUser->s_email = $request ->input('email');
            $updateUser->s_phone = $request ->input('phone');

            if($request ->input('password')){
                $updateUser->s_password= Hash::make($request ->input('password'));
            }   

            $updateUser->update();
        }

        $users->update();
        Session::flash('success', 'User has been Updated Successfully');
        return Redirect::route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users= User::find($id);
        $mail = $users->email;
        $userType = $users->type;

        if ($userType == 'Passenger') {

            $deleteUser = passengerInformations::where('email','=',$mail)->first();
            if($deleteUser->image){
                File::delete(public_path('uploads/passenger-profile/'.$deleteUser->image));
            }

            $deleteUser->delete();

        }elseif($userType == 'Leader') {

            $deleteUser = Tourleader::where('th_email','=',$mail)->first();
            if($deleteUser->image){
                File::delete(public_path('uploads/leader-profile/'.$deleteUser->image));
            }

            $deleteUser->delete();
        }elseif($userType == 'Guide') {

            $deleteUser = Guide::where('guide_email','=',$mail)->first();
            if($deleteUser->image){
                File::delete(public_path('uploads/guide-profile/'.$deleteUser->image));
            }

            $deleteUser->delete();
        }elseif($userType == 'Hotel') {

            $deleteUser = Hotel::where('hotel_email','=',$mail)->first();
            if($deleteUser->image){
                File::delete(public_path('uploads/hotel-profile/'.$deleteUser->image));
            }

            $deleteUser->delete();
        }elseif($userType == 'BC' || $userType == 'ATP') {

            $deleteUser = Supplier::where('s_email','=',$mail)->first();
            if($deleteUser->image){
                File::delete(public_path('uploads/supplier-profile/'.$deleteUser->image));
            }

            $deleteUser->delete();
        }

        $users->delete();
        
        Session::flash('success', 'User has been Deleted Successfully');
        return Redirect::route('user.index');
    }
}