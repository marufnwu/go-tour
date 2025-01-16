<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mediaassign;
use App\Models\Sight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class MediaAssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Mediaassign::all();
        return view('admin.pages.sight_media.index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Mediaassign::all();
        $sights = Sight::orderBy('sight_name', 'asc')->get();
        return view('admin.pages.sight_media.add', compact('medias', 'sights'));
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
            'sight_id' => 'required',
            'esvideo' => 'required',
            'envideo' => 'required', 
            'esdescription' => 'required', 
            'endescription' => 'required', 
            'img1' => 'required', 
            'img2' => 'required', 
            'img3' => 'required',
            'img4' => 'required', 
            'img5' => 'required', 
            'img6' => 'required', 

        ]);

        $mediaLinks = array(
            "esvideo" => $request ->input('esvideo'),
            "envideo" => $request ->input('envideo'),
            "esdescription" => $request ->input('esdescription'),
            "endescription" => $request ->input('endescription'),
            "img1" => $request ->input('img1'),
            "img2" => $request ->input('img2'),
            "img3" => $request ->input('img3'),
            "img4" => $request ->input('img4'),
            "img5" => $request ->input('img5'),
            "img6" => $request ->input('img6'),
        );

        $medias = new Mediaassign();
        $medias->sight_id= $request ->input('sight_id');
        $medias->media_link= json_encode($mediaLinks);
        $medias->save();
        Session::flash('success', 'Media Assigned Successfully');
       return Redirect::route('assign_media.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medias = Mediaassign::find($id);
        $sights = Sight::all();
        $mediaLinks = json_decode($medias->media_link);
        
        return view('admin.pages.sight_media.show', compact('mediaLinks', 'sights','medias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medias = Mediaassign::find($id);
        $sights = Sight::all();
        $mediaLinks = json_decode($medias->media_link);

        //dd($mediaLinks);

        return view('admin.pages.sight_media.edit', compact('mediaLinks', 'sights','medias'));
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
            'sight_id' => 'required',
            'esvideo' => 'required',
            'envideo' => 'required', 
            'esdescription' => 'required', 
            'endescription' => 'required', 
            'img1' => 'required', 
            'img2' => 'required', 
            'img3' => 'required',
            'img4' => 'required', 
            'img5' => 'required', 
            'img6' => 'required', 

        ]);

        $mediaLinks = array(
            "esvideo" => $request ->input('esvideo'),
            "envideo" => $request ->input('envideo'),
            "esdescription" => $request ->input('esdescription'),
            "endescription" => $request ->input('endescription'),
            "img1" => $request ->input('img1'),
            "img2" => $request ->input('img2'),
            "img3" => $request ->input('img3'),
            "img4" => $request ->input('img4'),
            "img5" => $request ->input('img5'),
            "img6" => $request ->input('img6'),
        );


        $medias = Mediaassign::find($id);

        $medias->sight_id= $request ->input('sight_id');
        $medias->media_link= json_encode($mediaLinks);

        $medias->update();
        Session::flash('success', 'Updated Successfully');
        return Redirect::route('assign_media.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medias = Mediaassign::find($id);
        $medias -> delete();
        
        Session::flash('success', 'Deleted Successfully');
        return Redirect::route('assign_media.index');
    }
}