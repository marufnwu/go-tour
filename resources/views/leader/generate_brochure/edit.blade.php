@extends('admin.layouts.master')

@section('title','Edit brochure')

@section('styles')
    <link href="{{ asset('/')}}admin/css/croppie.css" rel="stylesheet"/>
@endsection

@section('content')

<div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('generate_brochure.index')}}">Generate brochure</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Brochure</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <i class="fas fa fa-desktop"></i> Edit Airline Ticket
                </h6>
            </div>
            <form id="ajaxForm" class="" action="{{route('generate_brochure.update',$brochures->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">language<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="language">
                                    <option value="">Select Language...</option>
                                    <option value="1" {{$brochures->language == 1 ? 'selected' : ''}}>English</option>
                                    <option value="2" {{$brochures->language == 2 ? 'selected' : ''}}>spanish</option>

                                </select>
                                @error('language')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Departure city<span class="text-danger">*</span></label>
                                <input id="" type="text" class="form-control form-margin-bottom" name="departure_city" value="{{ $brochures->departure_city }}"  placeholder="Departure city...">
                                @error('departure_city')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour cost<span class="text-danger">*</span></label>
                                <input id="" type="number" class="form-control form-margin-bottom" name="tour_cost" value="{{ $brochures->tour_cost }}"  placeholder="Tour cost..." min="0">
                                @error('tour_cost')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Departure date<span class="text-danger">*</span></label>
                                <input id="" type="date" class="form-control form-margin-bottom" name="departure_date" value="{{ $brochures->departure_date}}"  placeholder="Departure date...">
                                @error('departure_date')
                                    <span class="input-error">{{$message == 'The passenger id field is required.' ? 'The passenger name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Return date<span class="text-danger">*</span></label>
                                <input id="" type="date" class="form-control form-margin-bottom" name="arrival_date" value="{{ $brochures->arrival_date }}"  placeholder="Arrival date...">
                                @error('arrival_date')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Invitation<span class="text-danger">*</span></label>
                                <input id="" type="text" class="form-control form-margin-bottom" name="invitation" value="{{ $brochures->invitation }}"  placeholder="Invitation...">
                                @error('invitation')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Profile image<span class="text-danger">*</span></label>
                                <input id="customFile" type="file" class="form-margin-bottom" name="profile_image_path" value="">
                                @error('profile_image_path')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 py-2">
                            <img src="{{asset('uploads/brochures/'.$brochures->profile_image_path)}}" class="prevel rounded" id="imgprev" style=" width: 100%; height:300px; object-fit: contain;" alt="profile image">
                            <h5 id="profile-img-prev" style="text-align:center; margin-top: 0.5rem">Current Image</h5>
                        </div>
                    </div>    
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12"></div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                            <button type="submit" id="submitBtn" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i> Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>
@endsection