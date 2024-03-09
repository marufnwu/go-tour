@extends('admin.layouts.master')

@section('title','create brochure')

@section('styles')
    <link href="{{ asset('/')}}admin/css/croppie.css" rel="stylesheet"/>
@endsection

@section('content')

<div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('generate_brochure.index') }}">Brochure</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create brochure</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i>  Add Brochure
                </h4>

            </div>
            <form id="ajaxForm" class="" action="{{route('generate_brochure.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card-body">
              
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">language<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="language">
                                	<option value="">Select Language...</option>
                                    <option value="1">English</option>
                                    <option value="2">spanish</option>
                                </select>
                                @error('language')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Departure city<span class="text-danger">*</span></label>
                                <input id="" type="text" class="form-control form-margin-bottom" name="departure_city" value="{{ old('departure_city') }}"  placeholder="Departure city...">
                                @error('departure_city')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour cost<span class="text-danger">*</span></label>
                                <input id="" type="number" class="form-control form-margin-bottom" name="tour_cost" value="{{ old('tour_cost') }}"  placeholder="Tour cost..." min="0">
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
                                <input id="" type="date" class="form-control form-margin-bottom" name="departure_date" value="{{ old('departure_date') }}"  placeholder="Departure date...">
                                @error('departure_date')
                                    <span class="input-error">{{$message == 'The passenger id field is required.' ? 'The passenger name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Return date<span class="text-danger">*</span></label>
                                <input id="" type="date" class="form-control form-margin-bottom" name="arrival_date" value="{{ old('arrival_date') }}"  placeholder="Arrival date...">
                                @error('arrival_date')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Invitation<span class="text-danger">*</span></label>
                                <input id="" type="text" class="form-control form-margin-bottom" name="invitation" value="{{ old('invitation') }}"  placeholder="Invitation...">
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
                                <input id="customFile" type="file" class="form-margin-bottom" name="profile_image_path" value="{{ old('profile_image_path') }}">
                                @error('profile_image_path')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-6 py-2">
							<img src="" class="prevel rounded" id="imgprev" style="display: none; width: 100%; height:300px; object-fit: contain;">
							<h5 id="profile-img-prev" style="display: none;text-align:center; margin-top: 0.5rem">Profile image preview</h5>
	                    </div>
	                </div>                
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-3 col-12"></div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <button id="" type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('/')}}admin/js/croppie.js"></script>
@endsection