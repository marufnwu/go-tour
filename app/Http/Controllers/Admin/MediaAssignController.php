<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
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
        $sights = Sight::all();
        $types = Media::all();
        return view('admin.pages.sight_media.add', compact('medias', 'sights', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medias = new Mediaassign();
        $medias->sight_id= $request ->input('sight_id');
        $medias->media_type_id= $request ->input('media_type_id');
        $medias->media_link= $request ->input('media_link');
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
        $medias = Mediaassign::find($id);
        $sights = Sight::all();
        $types = Media::all();
        return view('admin.pages.sight_media.edit', compact('medias', 'sights', 'types'));
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
        $medias = Mediaassign::find($id);
        $medias->sight_id= $request ->input('sight_id');
        $medias->media_type_id= $request ->input('media_type_id');
        $medias->media_link= $request ->input('media_link');
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
