<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use App\Models\Airport;
use App\Models\Passengerinfo;
use App\Models\Paymentmethod;
use App\Models\Specialrequest;
use App\Models\Tourleadertour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

// use \Exception;


class PassengerInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = auth()->user()->type;
        
        return view('admin.pages.passenger_info.index', compact('passengers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $passengers= Passengerinfo::all();
        $tours= Tourleadertour::all();
        $payments= Paymentmethod::all();
        $accommodations= Accommodation::all();
        $airports= Airport::all();
        return view('admin.pages.passenger_info.add', compact('passengers','airports','tours','payments','accommodations'));
    }

    public function signup()
    {
        $passengers= Passengerinfo::all();
        $tours= Tourleadertour::all();
        $payments= Paymentmethod::all();
        $accommodations= Accommodation::all();
        $airports= Airport::all();
        return view('admin.pages.passenger_info.signup', compact('passengers','airports','tours','payments','accommodations'));
    }

    //public function postSignup(Request $request)
    // {
    //     $is_exist = User::where('email', $request->email)->first();
    //     if(!$is_exist) {
           
    //         $valideData = $request->validate([
    //             'first_name' => 'required | min:2 | regex:/^[\pL\s\-]+$/u',
    //             'middle_name' => 'required | min:2 | regex:/^[\pL\s\-]+$/u',
    //             'last_name' => 'required | min:2 | regex:/^[\pL\s\-]+$/u',
    //             'citizenship_country' => 'required | min:5 | regex:/^[\pL\s\-]+$/u',
    //             'date_of_birth' => 'required | min:0 | numeric',
    //             'phone_number' => 'required | numeric | min:5',
    //             'email' => 'required | email',
    //             'tour_code' => 'required | numeric',
    //             'supplement_cost' => 'required | numeric',
    //             'departure_city_id' => 'required',
    //             'accomodation_id' => 'required',
    //             'tourleader_tour_id' => 'required',
    //             'payment_id' => 'required',
    //             'password' => 'required',
    //             'sharing_room' => 'required',
    //             'image' => 'required',
    //         ]);
    //         $passengers = new Passengerinfo();
    //         $passengers->first_name= $request ->input('first_name');
    //         $passengers->middle_name= $request ->input('middle_name');
    //         $passengers->last_name= $request ->input('last_name');
    //         $passengers->citizenship_country= $request ->input('citizenship_country');
    //         $passengers->date_of_birth = $request->input('date_of_birth');
    //         $passengers->phone_number= $request ->input('phone_number');
    //         $passengers->email= $request ->input('email');
    //         $passengers->tour_code= $request ->input('tour_code');
    //         $passengers->supplement_cost= $request ->input('supplement_cost');
    //         $passengers->departure_city_id= $request ->input('departure_city_id');
    //         $passengers->accomodation_id= $request ->input('accomodation_id');
    //         $passengers->tourleader_tour_id= $request ->input('tourleader_tour_id');
    //         $passengers->payment_id= $request ->input('payment_id');
    //         if($request ->input('password')){
    //             $passengers->password= Hash::make($request ->input('password'));
    //         }
    //         if($request ->input('sharing_room')){
    //             $passengers->sharing_room= $request ->input('sharing_room');
    //         }
    //         $img = $request->file('image');   
    //         if ($request->hasFile('image')) {
    //             $path = public_path() . '/uploads/passengers/';
            
    //             $filename = uniqid() .'.'. $img->getClientOriginalExtension();
    //             $img->move($path, $filename);
    //             $passengers->image = '/passengers/'.$filename;
    //         }
    //         try{
    //             if($passengers->save()){
    //                 $users = new User();
    //                 $users = [
    //                     'name'=> $request->first_name,
    //                     'email'=> $request->email,
    //                     'phone'=> $request->phone_number,
    //                     'password'=> Hash::make($request-> password),
    //                     'type' => 'Passenger',
    //                     'created_at' => now(),
    //                     'updated_at' => now(),
    //                 ];
    //                 User::insert($users);
    //             }         
    
    //             Session::flash('success', 'Passenger Information has been Added Successfully');
    //             return Redirect::route('passenger.signup');
    //         } catch(Exception $e) {
    //             Session::flash('warning', 'Please fill out the required fields.');
    //             return 'success';
    //         }     
    //     } else {
    //         Session::flash('warning', 'This email already exist.');
    //         return 'success';
    //     }
    
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $is_exist = User::where('email', $request->email)->first();
        if(!$is_exist) {  

            // $valideData = $request->validate([
            //     'first_name' => 'required | min:2 | regex:/^[\pL\s\-]+$/u',
            //     'middle_name' => 'required | min:2 | regex:/^[\pL\s\-]+$/u',
            //     'last_name' => 'required | min:2 | regex:/^[\pL\s\-]+$/u',
            //     'citizenship_country' => 'required | min:5 | regex:/^[\pL\s\-]+$/u',
            //     'date_of_birth' => 'required | min:0 | numeric',
            //     'phone_number' => 'required | numeric | min:5',
            //     'email' => 'required | email',
            //     'tour_code' => 'required | numeric',
            //     'supplement_cost' => 'required | numeric',
            //     'departure_city_id' => 'required',
            //     'accomodation_id' => 'required',
            //     'tourleader_tour_id' => 'required',
            //     'payment_id' => 'required',
            //     'password' => 'required',
            //     'sharing_room' => 'required',
            //     'image' => 'required',
            // ]); 
             $valideData = $request->validate([
                 'first_name' => 'required',
                 'middle_name' => 'required',
                 'last_name' => 'required',
                 'citizenship_country' => 'required',
                 'date_of_birth' => 'required',
                 'phone_number' => 'required',
                 'email' => 'required | emil',
                 'tour_code' => 'required',
                 'supplement_cost' => 'required',
                 'departure_city_id' => 'required',
                 'accomodation_id' => 'required',
                 'tourleader_tour_id' => 'required',
                 'payment_id' => 'required',
                 'password' => 'required',
                 'sharing_room' => 'required',
            ]);
            $passengers = new Passengerinfo();
            $passengers->first_name= $request ->input('first_name');
            $passengers->middle_name= $request ->input('middle_name');
            $passengers->last_name= $request ->input('last_name');
            $passengers->citizenship_country= $request ->input('citizenship_country');
            $passengers->date_of_birth = $request->input('date_of_birth');
            $passengers->phone_number= $request ->input('phone_number');
            $passengers->email= $request ->input('email');
            $passengers->tour_code= $request ->input('tour_code');
            $passengers->supplement_cost= $request ->input('supplement_cost');
            $passengers->departure_city_id= $request ->input('departure_city_id');
            $passengers->accomodation_id= $request ->input('accomodation_id');
            $passengers->tourleader_tour_id= $request ->input('tourleader_tour_id');
            $passengers->payment_id= $request ->input('payment_id');
           // if($request ->input('password')){
            $passengers->password= Hash::make($request ->input('password'));
           // }
           // if($request ->input('sharing_room')){
            $passengers->sharing_room= $request ->input('sharing_room');
           // }
            //$img = $request->file('image');   
           // if ($request->hasFile('image')) {
            //$path = public_path() . '/uploads/passengers/';
            
            //$filename = uniqid() .'.'. $img->getClientOriginalExtension();
           // $img->move($path, $filename);
            $passengers->image = "hola"; //'/passengers/'.$filename;
          //  }
            $passengers->save();
          //  try{
           //     if($passengers->save()){
            $users = new User();
            $users = [
                'name'=> $request->first_name,
                'email'=> $request->email,
                'phone'=> $request->phone_number,
                'password'=> Hash::make($request-> password),
                'type' => 'Passenger',
                'created_at' => now(),
                'updated_at' => now(),
            ];
            User::insert($users);
            
               // }         
    
            Session::flash('success', 'Passenger Information has been Added Successfully');
            return Redirect::route('passenger.index');
           // } catch(Exception $e) {
            //    Session::flash('warning', 'Please fill out the required fields.');
           //     return Redirect::route('passenger.create');
          //  }            
        } else {
            Session::flash('warning', 'This email already exist.');
            return 'success';
        }
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
        $passengers = Passengerinfo::find($id);
        $pasngrs = Passengerinfo::all();
        $tours= Tourleadertour::all();
        $payments= Paymentmethod::all();
        $accommodations= Accommodation::all();
        $airports= Airport::all();
        return view('admin.pages.passenger_info.edit', compact('passengers','airports','tours','payments','accommodations', 'pasngrs'));
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
            'first_name' => 'required | min:2 | regex:/^[\pL\s\-]+$/u',
            'middle_name' => 'required | min:2 | regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required | min:2 | regex:/^[\pL\s\-]+$/u',
            'citizenship_country' => 'required | min:5 | regex:/^[\pL\s\-]+$/u',
            'date_of_birth' => 'required | min:0 | numeric',
            'phone_number' => 'required | numeric | min:5',
            'email' => 'required | email',
            'tour_code' => 'required | numeric',
            'supplement_cost' => 'required | numeric',
            'departure_city_id' => 'required',
            'accomodation_id' => 'required',
            'tourleader_tour_id' => 'required',
            'payment_id' => 'required',
            'password' => 'required',
            'sharing_room' => 'required',
            'image' => 'required',
        ]); 
        $passengers = Passengerinfo::find($id);
        $passengers->first_name= $request ->input('first_name');
        $passengers->middle_name= $request ->input('middle_name');
        $passengers->last_name= $request ->input('last_name');
        $passengers->citizenship_country= $request ->input('citizenship_country');
        $passengers->date_of_birth = $request->input('date_of_birth');
        $passengers->phone_number= $request ->input('phone_number');
        $passengers->tour_code= $request ->input('tour_code');
        $passengers->supplement_cost= $request ->input('supplement_cost');
        $passengers->departure_city_id= $request ->input('departure_city_id');
        $passengers->accomodation_id= $request ->input('accomodation_id');
        $passengers->tourleader_tour_id= $request ->input('tourleader_tour_id');
        $passengers->payment_id= $request ->input('payment_id');
        if($request ->input('email')){
            $passengers->email= $request ->input('email');
        }
        if($request ->input('password')){
            $passengers->password= Hash::make($request ->input('password'));
        }
        if($request ->input('sharing_room')){
            $passengers->sharing_room= $request ->input('sharing_room');
        }
        $img = $request->file('image');   
        if ($request->hasFile('image')) {
            $path = public_path() . '/uploads/passengers/';
            $path_2 = public_path() . '/uploads';

            // For remove old file            
            if ($passengers->image != '' && $passengers->image != null) {
                $file_old = $path_2 . $passengers->image;
                @unlink($file_old);
            }

            $filename = uniqid() .'.'. $img->getClientOriginalExtension();
            $img->move($path, $filename);
            $passengers->image = '/passengers/'.$filename;
        }

        $passengers->update();
        Session::flash('success', 'Passenger Information has been Added Successfully');
        return Redirect::route('passenger.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passengers= Passengerinfo::find($id);
        if($passengers->image){
            
            $path = 'uploads'.$passengers->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $passengers-> delete();
        
        Session::flash('success', 'Passenger Information has been Deleted Successfully');
        return Redirect::route('passenger.index');
    }

    public function pass_to_be_ticket(){   
        dd($type);
        $passengers = Passengerinfo::all();     
        $passengers= Passengerinformations::where('tour_code', '<>', '')->where('tourleader_tour_id', '<>', '')->get();
        return view('admin.pages.passenger_info.index', compact('passengers'));
    }
}