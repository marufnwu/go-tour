<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tourleader;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class TourLeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourleaders = Tourleader::all();

        return view('admin.pages.tour_leader.index', compact('tourleaders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.tour_leader.add');
    }

    public function signup()
    {
        return view('admin.pages.tour_leader.signup');
    }

    public function postSignup(Request $request)
    {
        $is_exist = User::where('email', $request->email)->first();
        if(!$is_exist) {

            $valideData = $request->validate([
                'phone' => 'required | numeric',
                'email' => 'required | email',
                'fname' => 'required | alpha | min:3',
                'mname' => 'required | alpha | min:3',
                'lname' => 'required | alpha | min:3',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip' => 'required | numeric',
                'chname' => 'required',
                'chdenomination' => 'required',
                'chmember' => 'required | numeric',
                'chphone' => 'required | numeric',
                'chemail' => 'required | email',
                'password' => 'required'
            ]);

            $tourleaders = new Tourleader();
            $tourleaders->tlfirst_n= $request ->input('fname');
            $tourleaders->tl_m_name= $request->input('mname');
            $tourleaders->ti_l_name= $request ->input('lname');
            $tourleaders->address= $request->input('address');
            $tourleaders->city= $request ->input('city');
            $tourleaders->state= $request->input('state');
            $tourleaders->zip= $request ->input('zip');
            $tourleaders->church_name= $request->input('chname');
            $tourleaders->church_denomination= $request ->input('chdenomination');
            $tourleaders->church_members= $request->input('chmember');
            $tourleaders->church_phone= $request ->input('chphone');
            $tourleaders->church_email= $request->input('chemail');
            $tourleaders->th_email= $request ->input('email');
            $tourleaders->th_phone= $request->input('phone');
            $tourleaders->password= Hash::make($request->input('password'));

            if ($request->hasFile('image')) {
                $image = $request->file('image');

                $croppedImage = Image::make($image)->fit(500, 500);

                // Generate a unique filename for the cropped image, e.g., using a timestamp
                $filename = time() . '.' . $image->getClientOriginalExtension();

                // Store the cropped image in a public directory
                $croppedImage->save(public_path('uploads/leader-profile/' . $filename));

                $tourleaders->image= $filename;
            }

            $users = new User();
            $users = [
                'name'=> $request->fname,
                'email'=> $request->email,
                'phone'=> $request->phone,
                'password'=> Hash::make($request-> password),
                'type' => 'Leader',
                'image' => $tourleaders->image,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            User::insert($users);

            $tourleaders->save();
            
            Session::flash('success', 'You Have Registered Successfully');
            return Redirect::route('tourleaders.signup');
        } else {
            Session::flash('warning', 'This email already exist.');
            return 'success';
        }
    
    }
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
            
            $valideData = $request->validate([
                'phone' => 'required | numeric',
                'email' => 'required | email',
                'fname' => 'required | alpha | min:3',
                'lname' => 'required | alpha | min:3',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip' => 'required | numeric',
                'chname' => 'required',
                'chdenomination' => 'required',
                'chmember' => 'required | numeric',
                'chphone' => 'required | numeric',
                'chemail' => 'required | email',
                'password' => 'required'
            ]);

            $tourleaders = new Tourleader();
            $tourleaders->tlfirst_n= $request ->input('fname');
            $tourleaders->tl_m_name= $request->input('mname');
            $tourleaders->ti_l_name= $request ->input('lname');
            $tourleaders->address= $request->input('address');
            $tourleaders->city= $request ->input('city');
            $tourleaders->state= $request->input('state');
            $tourleaders->zip= $request ->input('zip');
            $tourleaders->church_name= $request->input('chname');
            $tourleaders->church_denomination= $request ->input('chdenomination');
            $tourleaders->church_members= $request->input('chmember');
            $tourleaders->church_phone= $request ->input('chphone');
            $tourleaders->church_email= $request->input('chemail');
            $tourleaders->th_email= $request ->input('email');
            $tourleaders->th_phone= $request->input('phone');
            $tourleaders->password= Hash::make($request->input('password'));
            
            if ($request->hasFile('image')) {
                $image = $request->file('image');

                $croppedImage = Image::make($image)->fit(500, 500);

                // Generate a unique filename for the cropped image, e.g., using a timestamp
                $filename = time() . '.' . $image->getClientOriginalExtension();

                // Store the cropped image in a public directory
                $croppedImage->save(public_path('uploads/leader-profile/' . $filename));

                $tourleaders->image= $filename;
            }

            $tourleaders->save();

            $users = new User();
            $users = [
                'name'=> $request->fname,
                'email'=> $request->email,
                'phone'=> $request->phone,
                'password'=> Hash::make($request-> password),
                'type' => 'Leader',
                'image' => $tourleaders->image,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            User::insert($users);
        
            Session::flash('success', 'Leader Information has been Added Successfully');
            return Redirect::route('tourleaders.create');
        } else {
            Session::flash('warning', 'This email already exist.');
            return Redirect::route('tourleaders.create');
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
        if (auth()->user()->type == 'Admin') {
            $tourleaders = Tourleader::find($id);
        }elseif (auth()->user()->type == 'Leader') {
            $leaderMail = auth()->user()->email;
           
            $tourleaders = Tourleader::where('th_email','=',$leaderMail)->first();
        }

        return view('admin.pages.tour_leader.edit', compact('tourleaders'));
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
            'phone' => 'required | numeric',
            'fname' => 'required | alpha | min:3',
            'lname' => 'required | alpha | min:3',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required | numeric',
            'chname' => 'required',
            'chdenomination' => 'required',
            'chmember' => 'required | numeric',
            'chphone' => 'required | numeric',
            'chemail' => 'required | email',
        ]);

        $tourleaders = Tourleader::find($id);
        $oldMail = $tourleaders->th_email;

        $tourleaders->tlfirst_n= $request ->input('fname');
        $tourleaders->tl_m_name= $request->input('mname');
        $tourleaders->ti_l_name= $request ->input('lname');
        $tourleaders->address= $request->input('address');
        $tourleaders->city= $request ->input('city');
        $tourleaders->state= $request->input('state');
        $tourleaders->zip= $request ->input('zip');
        $tourleaders->church_name= $request->input('chname');
        $tourleaders->church_denomination= $request ->input('chdenomination');
        $tourleaders->church_members= $request->input('chmember');
        $tourleaders->church_phone= $request ->input('chphone');
        $tourleaders->church_email= $request->input('chemail');
        $tourleaders->th_phone= $request->input('phone');
        
        if ($request->input('password')) {
            $tourleaders->password= Hash::make($request ->input('password'));
        }

        if ($request->input('email')) {
            $tourleaders->th_email= $request->input('email');
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            File::delete(public_path('uploads/leader-profile/'.$tourleaders->image));

            $croppedImage = Image::make($image)->fit(500, 500);

            $filename = time() . '.' . $image->getClientOriginalExtension();

            $croppedImage->save(public_path('uploads/leader-profile/' . $filename));

            $tourleaders->image= str_replace('public/uploads/leader-profile/','',$filename);
        } 

        //update user
        $updateUser = User::where('email','=',$oldMail)->first();

        $updateUser->name = $request ->input('fname');
        $updateUser->phone = $request ->input('phone');
        $updateUser->image = $tourleaders->image;
        
        if ($request->input('email')) {
            $updateUser->email = $request ->input('email');
        }
        
        

        if ($request->input('password')) {
            $updateUser->password = Hash::make($request ->input('password'));
        }
       

        $updateUser->update();

        //if(auth()->user()->type == 'Admin'){
            //$tourleaders->th_email= $request ->input('email');
        //}else $tourleaders->th_email = $tourleaders->th_email;

        $tourleaders->update();

        if(auth()->user()->type == 'Admin'){
            Session::flash('success', 'Leader Information has been Updated Successfully');
            return Redirect::route('tourleaders.index');
        }else {

            $leaderMail = auth()->user()->email;

            $tourleaders = Tourleader::where('th_email','=',$leaderMail)->first();

            Session::flash('success', 'Leader Information has been Updated Successfully');
            return Redirect::route('tourleaders.edit',$tourleaders);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourleaders = Tourleader::find($id);

        if($tourleaders->image){
            File::delete(public_path('uploads/leader-profile/'.$tourleaders->image));
        }

        $user = User::where('email','=',$tourleaders->th_email)->first();

        $tourleaders->delete();

        $user->delete();

        Session::flash('success', 'Leader Information has been Deleted Successfully');
        return Redirect::route('tourleaders.index');
    
    }
}
