@extends('admin.layouts.master')

@section('title','Passenger Information | Edit')

@section('styles')
    <link href="{{ asset('/')}}admin/css/croppie.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                @if(auth()->user()->type == 'Admin' || auth()->user()->type == 'OP')
                <li class="breadcrumb-item"><a href="{{ route('passenger.index') }}">Passenger Information</a></li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">Edit Passenger Information</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <i class="fas fa fa-desktop"></i> Edit Passenger Information
                </h6>

            </div>
            <form id="ajaxForm" class="" action="{{route('passenger.update',$passengers->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">First Name<span class="text-danger">*</span></label>
                                    <input id="from" type="text" class="form-control form-margin-bottom" name="first_name" value="{{ $passengers->first_name }}"  placeholder="First name...">
                                    @error('first_name')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Middle Name<span class="text-danger">*</span></label>
                                    <input id="from" type="text" class="form-control form-margin-bottom" name="middle_name" value="{{ $passengers->middle_name }}"  placeholder="Middle name...">
                                    @error('middle_name')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Last Name<span class="text-danger">*</span></label>
                                    <input id="from" type="text" class="form-control form-margin-bottom" name="last_name" value="{{ $passengers->last_name }}"  placeholder="Last name...">
                                    @error('last_name')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="{{auth()->user()->type == 'Admin' || auth()->user()->type == 'OP' || auth()->user()->type == 'Leader'?'col-lg-4':'col-lg-6'}}">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Phone<span class="text-danger">*</span></label>
                                    <input id="from" type="tel" class="form-control form-margin-bottom" name="phone_number" value="{{ $passengers->phone_number }}"  placeholder="Phone number...">
                                    @error('phone_number')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            @if(auth()->user()->type == 'Admin' || auth()->user()->type == 'OP' || auth()->user()->type == 'Leader')
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Email<span class="text-danger">*</span></label>
                                    <input id="from" type="email" class="form-control form-margin-bottom" name="email" value="{{ $passengers->email }}"  placeholder="" autocomplete="off">
                                    @error('email')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            @endif
                            <div class="{{auth()->user()->type == 'Admin' || auth()->user()->type == 'OP' || auth()->user()->type == 'Leader'?'col-lg-4':'col-lg-6'}}">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Nationality<span class="text-danger">*</span></label>
                                    <select name="nationality" value="" class="form-control form-margin-bottom">
                                      <option value="">Select Nationality...</option>
                                        @foreach ($nationalities as $nationality)
                                          <option value="{{ $nationality }}" {{ $passengers->nationality  == $nationality ? 'selected' : '' }}>{{ $nationality }}</option>
                                        @endforeach
                                    </select>
                                    @error('nationality')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Payment Type<span class="text-danger">*</span></label>
                                    <select class="form-control form-margin-bottom" name="payment_id">
                                        <option value="">Select Payment Type</option>
                                        @foreach ($payments as $payment)
                                          <option value="{{ @$payment->id }}" {{ $passengers->payment_id  == $payment->id ? 'selected' : '' }}>{{ $payment->payment_method }}</option>
                                        @endforeach
                                    </select>
                                    @error('payment_id')
                                        <span class="input-error">{{$message == 'The payment id field is required.' ? 'The payment type is required' : $message;}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Accomodation Type<span class="text-danger">*</span></label>
                                    <select class="form-control form-margin-bottom" name="accomodation_id">
                                        <option value="">Select Accomodation Type</option>
                                        @foreach ($accommodations as $accommodation)
                                          <option value="{{ @$accommodation->id }}" {{ $passengers->accomodation_id  == $accommodation->id ? 'selected' : '' }}>{{ $accommodation->accommodation_type_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('accomodation_id')
                                        <span class="input-error">{{$message == 'The accomodation id field is required.' ? 'The accomodation type is required' : $message;}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Departure City<span class="text-danger">*</span></label>
                                    <select class="form-control form-margin-bottom" name="departure_city_id">
                                        <option value="">Select Departure City</option>
                                        @foreach ($airports as $airport)
                                          <option value="{{ @$airport->id }}"  {{ $passengers->departure_city_id  == $airport->id ? 'selected' : '' }}>{{ $airport->airport_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('departure_city_id')
                                        <span class="input-error">{{$message == 'The departure city id field is required.' ? 'The departure city is required' : $message;}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Birth Date<span class="text-danger">*</span></label>
                                    <input id="from" type="date" class="form-control form-margin-bottom" name="birth_date" value="{{ $passengers->birth_date }}">
                                    @error('birth_date')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Password<span class="text-danger">*</span></label>
                                    <input id="from" type="password" class="form-control form-margin-bottom" name="password" value=""  placeholder="Password...">
                                    @error('password')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            {{--<div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Sharing Room With<span class="text-danger">*</span></label>
                                    <select class="form-control form-margin-bottom" name="sharing_room">
                                        <option value="">Select Sharing Room With</option>
                                        @foreach ($pasngrs as $pasngr)
                                          <option value="{{ @$pasngr->id }}" {{ @$passengers->sharing_room  == @$pasngr->id ? 'selected' : '' }}>{{ $pasngr->first_name.' '.$pasngr->last_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('sharing_room')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>--}}
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Supplement Cost<span class="text-danger">*</span></label>
                                    <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="supplement_cost" value="{{ $passengers->supplement_cost }}"  placeholder="Supplement cost...">
                                    @error('supplement_cost')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if(auth()->user()->type == 'Admin')
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Tour Leader Tour<span class="text-danger">*</span></label>
                                    <select class="form-control form-margin-bottom" name="tourleader_tour_id">
                                        <option value="">Select Tour Leader Tour</option>
                                        @foreach ($tours as $tour)
                                          <option value="{{ @$tour->id }}" {{ $passengers->tourleader_tour_id  == $tour->id ? 'selected' : '' }}>{{ $tour->tour_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tourleader_tour_id')
                                        <span class="input-error">{{$message == 'The tourleader tour id field is required.' ? 'The tour leader tour is required' : $message;}}</span>
                                    @enderror
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Profile image<span class="text-danger">*</span></label>
                                    <input id="customFile" type="file" class="form-margin-bottom" name="image">
                                    @error('image')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 py-2">
                                <img src="{{asset('uploads/passenger-profile/'.$passengers->image)}}" class="prevel rounded" id="imgprev" style=" width: 100%; height:300px; object-fit: contain;" alt="profile image">
                                <h5 id="profile-img-prev" style="text-align:center; margin-top: 0.5rem">Current Image</h5>
                            </div>
                        </div>  
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12"></div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                            <button type="submit" id="" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i> Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection


@section('scripts')
    <script src="{{ asset('/')}}admin/js/croppie.js"></script>

    <script>

        /* show file value after file select */
        /*   document.querySelector('.custom-file-input').addEventListener('change',function(e){
               var fileName = document.getElementById("upload_image").files[0].name;
               var nextSibling = e.target.nextElementSibling;
               nextSibling.innerText = fileName;
           });*/

        //================= Image Upload and resize ===================
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square' //circle
            },
            boundary: {
                width: 300,
                height: 300
            }
        });

        $('#upload_image').on('change', function (e) {
            var reader = new FileReader();
            reader.onload = (e) => {
                $('#uploaded_image').html('<img src="'+e.target.result+'" class="img-thumbnail mb-3" style="width:200px; height:220px" />');
                $('.js-avatar').val(this.files[0]);
            }
            reader.readAsDataURL(this.files[0]);

            $('.custom-file-label').text(this.files[0].name);
        });


        $('.crop_image').click(function (event) {
            $image_crop
                .croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                })
                .then(function (response) {
                    $('.js-avatar').val(response);
                    //console.log(response)
                    $('#uploadimageModal').modal('hide');
                    $('#uploaded_image').html('<img src="'+response+'" class="img-thumbnail mb-3" style="width:200px; height:220px"/>');
                })
        });

        // Image Upload

    </script>
@endsection