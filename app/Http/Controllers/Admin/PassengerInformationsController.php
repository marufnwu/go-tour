<?php

namespace App\Http\Controllers\Admin;

use App\Models\passengerInformations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use App\Models\Airport;
use App\Models\Airticket;
use App\Models\Supplier;
use App\Models\Passengerpayment;

use App\Models\Paymentmethod;
use App\Models\Specialrequest;
use App\Models\Tourleadertour;
use App\Models\Tourleader;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PassengerInformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        $type = auth()->user()->type;

        if ($type == "Admin" || $type == "OP") {
            $passengers = passengerInformations::all();

        }
        elseif ($type == "Leader") {

            $usermail = auth()->user()->email;

            $currentTourLeader = Tourleader::where('th_email','=',$usermail)->first()->id;
            
            $relatedTourLeaderTour = Tourleadertour::where('tourleader_id','=',$currentTourLeader)->get();

            $passengers = array();

            //dd($relatedTourLeaderTour);

            if( $relatedTourLeaderTour){
                foreach ($relatedTourLeaderTour as $key => $TLT) {
                    $tourPassengers = passengerInformations::where('tourleader_tour_id','=',$TLT->id)->get();

                    foreach ($tourPassengers as $key => $passenger) {
                        array_push($passengers,$passenger);
                    }
                }
            }else{
                $passengers = [];
            }
        }

        return view('admin.pages.passenger_info.index', compact('passengers'));
    }
    
    public function create()
    {
        $nationalities = array(
            'Afghan',
            'Albanian',
            'Algerian',
            'American',
            'Andorran',
            'Angolan',
            'Antiguans',
            'Argentinean',
            'Armenian',
            'Australian',
            'Austrian',
            'Azerbaijani',
            'Bahamian',
            'Bahraini',
            'Bangladeshi',
            'Barbadian',
            'Barbudans',
            'Batswana',
            'Belarusian',
            'Belgian',
            'Belizean',
            'Beninese',
            'Bhutanese',
            'Bolivian',
            'Bosnian',
            'Brazilian',
            'British',
            'Bruneian',
            'Bulgarian',
            'Burkinabe',
            'Burmese',
            'Burundian',
            'Cambodian',
            'Cameroonian',
            'Canadian',
            'Cape Verdean',
            'Central African',
            'Chadian',
            'Chilean',
            'Chinese',
            'Colombian',
            'Comoran',
            'Congolese',
            'Costa Rican',
            'Croatian',
            'Cuban',
            'Cypriot',
            'Czech',
            'Danish',
            'Djibouti',
            'Dominican',
            'Dutch',
            'East Timorese',
            'Ecuadorean',
            'Egyptian',
            'Emirian',
            'Equatorial Guinean',
            'Eritrean',
            'Estonian',
            'Ethiopian',
            'Fijian',
            'Filipino',
            'Finnish',
            'French',
            'Gabonese',
            'Gambian',
            'Georgian',
            'German',
            'Ghanaian',
            'Greek',
            'Grenadian',
            'Guatemalan',
            'Guinea-Bissauan',
            'Guinean',
            'Guyanese',
            'Haitian',
            'Herzegovinian',
            'Honduran',
            'Hungarian',
            'I-Kiribati',
            'Icelander',
            'Indian',
            'Indonesian',
            'Iranian',
            'Iraqi',
            'Irish',
            'Israeli',
            'Italian',
            'Ivorian',
            'Jamaican',
            'Japanese',
            'Jordanian',
            'Kazakhstani',
            'Kenyan',
            'Kittian and Nevisian',
            'Kuwaiti',
            'Kyrgyz',
            'Laotian',
            'Latvian',
            'Lebanese',
            'Liberian',
            'Libyan',
            'Liechtensteiner',
            'Lithuanian',
            'Luxembourger',
            'Macedonian',
            'Malagasy',
            'Malawian',
            'Malaysian',
            'Maldivan',
            'Malian',
            'Maltese',
            'Marshallese',
            'Mauritanian',
            'Mauritian',
            'Mexican',
            'Micronesian',
            'Moldovan',
            'Monacan',
            'Mongolian',
            'Moroccan',
            'Mosotho',
            'Motswana',
            'Mozambican',
            'Namibian',
            'Nauruan',
            'Nepalese',
            'New Zealander',
            'Nicaraguan',
            'Nigerian',
            'Nigerien',
            'North Korean',
            'Northern Irish',
            'Norwegian',
            'Omani',
            'Pakistani',
            'Palauan',
            'Panamanian',
            'Papua New Guinean',
            'Paraguayan',
            'Peruvian',
            'Polish',
            'Portuguese',
            'Qatari',
            'Romanian',
            'Russian',
            'Rwandan',
            'Saint Lucian',
            'Salvadoran',
            'Samoan',
            'San Marinese',
            'Sao Tomean',
            'Saudi',
            'Scottish',
            'Senegalese',
            'Serbian',
            'Seychellois',
            'Sierra Leonean',
            'Singaporean',
            'Slovakian',
            'Slovenian',
            'Solomon Islander',
            'Somali',
            'South African',
            'South Korean',
            'Spanish',
            'Sri Lankan',
            'Sudanese',
            'Surinamer',
            'Swazi',
            'Swedish',
            'Swiss',
            'Syrian',
            'Taiwanese',
            'Tajik',
            'Tanzanian',
            'Thai',
            'Togolese',
            'Tongan',
            'Trinidadian/Tobagonian',
            'Tunisian',
            'Turkish',
            'Tuvaluan',
            'Ugandan',
            'Ukrainian',
            'Uruguayan',
            'Uzbekistani',
            'Venezuelan',
            'Vietnamese',
            'Welsh',
            'Yemenite',
            'Zambian',
            'Zimbabwean'
        );
        $passengers= passengerInformations::all();
        $tours= Tourleadertour::all();
        $payments= Paymentmethod::all();
        $accommodations= Accommodation::all();
        $airports= Airport::all();
        return view('admin.pages.passenger_info.add', compact('passengers','airports','tours','payments','accommodations','nationalities'));
    }

    public function signup()
    {
        $passengers= passengerInformations::all();
        $tours= Tourleadertour::all();
        $payments= Paymentmethod::all();
        $accommodations= Accommodation::all();
        $airports= Airport::all();
        return view('admin.pages.passenger_info.signup', compact('passengers','airports','tours','payments','accommodations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $is_exist = User::where('email', $request->email)->first();
        if(!$is_exist) {  

            $valideData = $request->validate([
                'first_name' => 'required | min:2 | string',
                'last_name' => 'required | min:2 | string',
                'nationality' => 'required | min:5 | string',
                'birth_date' => 'required | min:0',
                'phone_number' => 'required | numeric | min:5',
                'email' => 'required | email',
                'supplement_cost' => 'required | numeric',
                'departure_city_id' => 'required',
                'accomodation_id' => 'required',
                'tourleader_tour_id' => (auth()->user()->type=='Admin' || auth()->user()->type=='OP') ? 'required' : '',
                'payment_id' => 'required',
                'password' => 'required',
                //'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]); 
            
            $passengers = new passengerInformations();
            $passengers->first_name= $request ->input('first_name');
            $passengers->middle_name= $request ->input('middle_name');
            $passengers->last_name= $request ->input('last_name');
            $passengers->nationality= $request ->input('nationality');
            $passengers->birth_date = $request->input('birth_date');
            $passengers->phone_number= $request ->input('phone_number');
            $passengers->email= $request ->input('email');
            $passengers->supplement_cost= $request ->input('supplement_cost');
            $passengers->departure_city_id= $request ->input('departure_city_id');
            $passengers->accomodation_id= $request ->input('accomodation_id');
            $passengers->tourleader_tour_id= $request ->input('tourleader_tour_id');
            $passengers->payment_id= $request ->input('payment_id');
            $passengers->password= Hash::make($request ->input('password'));
            $passengers->sharing_room= 'x';

            if ($request->hasFile('image')) {
                $image = $request->file('image');

                $croppedImage = Image::make($image)->fit(500, 500);

                // Generate a unique filename for the cropped image, e.g., using a timestamp
                $filename = time() . '.' . $image->getClientOriginalExtension();

                // Store the cropped image in a public directory
                $croppedImage->save(public_path('uploads/passenger-profile/' . $filename));

                $passengers->image= $filename;
            }


            if(auth()->user()->type=='Admin' || auth()->user()->type=='OP'){
                $tourCode = Tourleadertour::where('id','=',$request ->input('tourleader_tour_id'))->first();
                if ($tourCode) {
                    $passengers->tour_code = $tourCode->tour_code;
                }else $passengers->tour_code = '-';
            }else {
                $user = auth()->user()->email;
                $tourLeader = Tourleader::where('th_email','=',$user)->first()->id;

                $tourCode = Tourleadertour::where('tourleader_id','=',$tourLeader)->first();

                if ($tourCode) {
                    $passengers->tour_code = $tourCode->tour_code;
                    $passengers->tourleader_tour_id = $tourCode->id;

                }else {
                    $passengers->tour_code = '-';
                    $passengers->tourleader_tour_id = '-';
                }
            }

            $passengers->save();

            $users = new User();
            $users = [
                'name'=> $request->first_name,
                'email'=> $request->email,
                'phone'=> $request->phone_number,
                'password'=> Hash::make($request-> password),
                'type' => 'Passenger',
                'image' => $passengers->image,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            User::insert($users);
    
            Session::flash('success', 'Passenger Information has been Added Successfully');
            return Redirect::route('passenger.create');
                  
        } else {
            Session::flash('warning', 'This email already exist.');
            return Redirect::route('passenger.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(passengerInformations $passengerInformations)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $nationalities = array(
            'Afghan',
            'Albanian',
            'Algerian',
            'American',
            'Andorran',
            'Angolan',
            'Antiguans',
            'Argentinean',
            'Armenian',
            'Australian',
            'Austrian',
            'Azerbaijani',
            'Bahamian',
            'Bahraini',
            'Bangladeshi',
            'Barbadian',
            'Barbudans',
            'Batswana',
            'Belarusian',
            'Belgian',
            'Belizean',
            'Beninese',
            'Bhutanese',
            'Bolivian',
            'Bosnian',
            'Brazilian',
            'British',
            'Bruneian',
            'Bulgarian',
            'Burkinabe',
            'Burmese',
            'Burundian',
            'Cambodian',
            'Cameroonian',
            'Canadian',
            'Cape Verdean',
            'Central African',
            'Chadian',
            'Chilean',
            'Chinese',
            'Colombian',
            'Comoran',
            'Congolese',
            'Costa Rican',
            'Croatian',
            'Cuban',
            'Cypriot',
            'Czech',
            'Danish',
            'Djibouti',
            'Dominican',
            'Dutch',
            'East Timorese',
            'Ecuadorean',
            'Egyptian',
            'Emirian',
            'Equatorial Guinean',
            'Eritrean',
            'Estonian',
            'Ethiopian',
            'Fijian',
            'Filipino',
            'Finnish',
            'French',
            'Gabonese',
            'Gambian',
            'Georgian',
            'German',
            'Ghanaian',
            'Greek',
            'Grenadian',
            'Guatemalan',
            'Guinea-Bissauan',
            'Guinean',
            'Guyanese',
            'Haitian',
            'Herzegovinian',
            'Honduran',
            'Hungarian',
            'I-Kiribati',
            'Icelander',
            'Indian',
            'Indonesian',
            'Iranian',
            'Iraqi',
            'Irish',
            'Israeli',
            'Italian',
            'Ivorian',
            'Jamaican',
            'Japanese',
            'Jordanian',
            'Kazakhstani',
            'Kenyan',
            'Kittian and Nevisian',
            'Kuwaiti',
            'Kyrgyz',
            'Laotian',
            'Latvian',
            'Lebanese',
            'Liberian',
            'Libyan',
            'Liechtensteiner',
            'Lithuanian',
            'Luxembourger',
            'Macedonian',
            'Malagasy',
            'Malawian',
            'Malaysian',
            'Maldivan',
            'Malian',
            'Maltese',
            'Marshallese',
            'Mauritanian',
            'Mauritian',
            'Mexican',
            'Micronesian',
            'Moldovan',
            'Monacan',
            'Mongolian',
            'Moroccan',
            'Mosotho',
            'Motswana',
            'Mozambican',
            'Namibian',
            'Nauruan',
            'Nepalese',
            'New Zealander',
            'Nicaraguan',
            'Nigerian',
            'Nigerien',
            'North Korean',
            'Northern Irish',
            'Norwegian',
            'Omani',
            'Pakistani',
            'Palauan',
            'Panamanian',
            'Papua New Guinean',
            'Paraguayan',
            'Peruvian',
            'Polish',
            'Portuguese',
            'Qatari',
            'Romanian',
            'Russian',
            'Rwandan',
            'Saint Lucian',
            'Salvadoran',
            'Samoan',
            'San Marinese',
            'Sao Tomean',
            'Saudi',
            'Scottish',
            'Senegalese',
            'Serbian',
            'Seychellois',
            'Sierra Leonean',
            'Singaporean',
            'Slovakian',
            'Slovenian',
            'Solomon Islander',
            'Somali',
            'South African',
            'South Korean',
            'Spanish',
            'Sri Lankan',
            'Sudanese',
            'Surinamer',
            'Swazi',
            'Swedish',
            'Swiss',
            'Syrian',
            'Taiwanese',
            'Tajik',
            'Tanzanian',
            'Thai',
            'Togolese',
            'Tongan',
            'Trinidadian/Tobagonian',
            'Tunisian',
            'Turkish',
            'Tuvaluan',
            'Ugandan',
            'Ukrainian',
            'Uruguayan',
            'Uzbekistani',
            'Venezuelan',
            'Vietnamese',
            'Welsh',
            'Yemenite',
            'Zambian',
            'Zimbabwean'
        );

        if (auth()->user()->type == 'Admin') {
            $passengers = passengerInformations::find($id);
        }elseif (auth()->user()->type == 'Passenger') {
            $passengerMail = auth()->user()->email;
           
            $passengers = passengerInformations::where('email','=',$passengerMail)->first();
        }
        
        $pasngrs = passengerInformations::all();
        $tours= Tourleadertour::all();
        $payments= Paymentmethod::all();
        $accommodations= Accommodation::all();
        $airports= Airport::all();
        return view('admin.pages.passenger_info.edit', compact('passengers','airports','tours','payments','accommodations', 'pasngrs','nationalities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $valideData = $request->validate([
            'first_name' => 'required | min:2 | string',
            'last_name' => 'required | min:2 | string',
            'nationality' => 'required | min:5 | string',
            'birth_date' => 'required | min:0',
            'phone_number' => 'required | numeric | min:5',
            'supplement_cost' => 'required | numeric',
            'departure_city_id' => 'required',
            'accomodation_id' => 'required',
            'tourleader_tour_id' => auth()->user()->type=='Admin'?'required':'',
            'payment_id' => 'required'
        ]); 

        $passengers = passengerInformations::find($id);
        $oldTLT = $passengers->tourleader_tour_id; //this gives the old tour leader tour
        $oldMail = $passengers->email;

        $passengers->first_name= $request ->input('first_name');
        $passengers->middle_name= $request ->input('middle_name');
        $passengers->last_name= $request ->input('last_name');
        $passengers->nationality= $request ->input('nationality');
        $passengers->birth_date = $request->input('birth_date');
        $passengers->phone_number= $request ->input('phone_number');
        $passengers->supplement_cost= $request ->input('supplement_cost');
        $passengers->departure_city_id= $request ->input('departure_city_id');
        $passengers->accomodation_id= $request ->input('accomodation_id');
        $passengers->payment_id= $request ->input('payment_id');
        $passengers->password= Hash::make($request ->input('password'));
        $passengers->sharing_room= 'x';

        if ($request->input('password')) {
            $passengers->password= Hash::make($request ->input('password'));
        }

        if ($request ->input('email')) {
            $passengers->email= $request ->input('email');
        }

        //Save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            File::delete(public_path('uploads/passenger-profile/'.$passengers->image));

            $croppedImage = Image::make($image)->fit(500, 500);

            $filename = time() . '.' . $image->getClientOriginalExtension();

            $croppedImage->save(public_path('uploads/passenger-profile/' . $filename));

            $passengers->image= str_replace('public/uploads/passenger-profile/','',$filename);
        } 

        //save tour leader & tour code
        if(auth()->user()->type=='Admin' || auth()->user()->type=='OP'){

            $tourCode = Tourleadertour::where('id','=',$request ->input('tourleader_tour_id'))->first();
            $passengers->tourleader_tour_id= $request ->input('tourleader_tour_id');

            if ($tourCode) {
                $passengers->tour_code = $tourCode->tour_code;
            }else $passengers->tour_code = '-';
        }elseif(auth()->user()->type=='Leader'){

            $user = auth()->user()->email;
            $tourLeader = Tourleader::where('th_email','=',$user)->first()->id;

            $tourCode = Tourleadertour::where('tourleader_id','=',$tourLeader)->first();

            if ($tourCode) {
                $passengers->tour_code = $tourCode->tour_code;
                $passengers->tourleader_tour_id = $tourCode->id;

            }else {
                $passengers->tour_code = '-';
                $passengers->tourleader_tour_id = '-';
            }
        }else{
            $passengers->tourleader_tour_id= $passengers->tourleader_tour_id;
        }
        
        //update payment
        if($request ->input('tourleader_tour_id')){
            $passengerTLT = $request ->input('tourleader_tour_id');
          
            $paymentTLT = Passengerpayment::where('tourleader_tour_id','=',$oldTLT)->first();

            if($paymentTLT){
                $paymentTLT->tourleader_tour_id = $passengerTLT;
                $paymentTLT->update();
            }
        }

        //update user
        $updateUser = User::where('email','=',$oldMail)->first();

        $updateUser->name = $request ->input('first_name');
        $updateUser->phone = $request ->input('phone_number');
        $updateUser->image = $passengers->image;
        
        if ($request ->input('email')) {
            $updateUser->email = $request ->input('email');
        }
        
        
        
        if ($request->input('password')) {
            $updateUser->password = Hash::make($request ->input('password'));
        }

        $updateUser->update();
        $passengers->update();
    
        if(auth()->user()->type == 'Admin'){
            Session::flash('success', 'passenger Information has been Updated Successfully');
            return Redirect::route('passenger.index');
        }else{
            Session::flash('success', 'passenger Information has been Updated Successfully');
            return Redirect::route('passenger.edit',$passengers);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   

        $passengers= passengerInformations::find($id);

        if($passengers->image){
            File::delete(public_path('uploads/passenger-profile/'.$passengers->image));
        }

        $user = User::where('email','=',$passengers->email)->first();

        $user->delete();
        $passengers->delete();
        
        Session::flash('success', 'Passenger Information has been Deleted Successfully');
        return Redirect::route('passenger.index');
    }

    public function pass_to_be_ticket(){   
        $usermail = auth()->user()->email;
        
        $airline = Supplier::where('s_email','=',$usermail)->first();

        if($airline){
            $tickets = Airticket::where('airline','=',$airline->id)->get();
        }else $tickets = [];
 
        return view('admin.pages.airline_ticket.index',compact('tickets'));
        //$passengers= Passengerinformations::where('tour_code', '<>', '')->where('tourleader_tour_id', '<>', '')->get();
        //return view('admin.pages.passenger_info.index', compact('passengers'));
    }
}
