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
                <li class="breadcrumb-item"><a href="{{ route('passenger.index') }}">Passenger Information</a></li>
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
            <form id="ajaxForm" class="" action="{{route('passenger.update',$passengers->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">First Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="first_name" value="{{ $passengers->first_name }}"  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Middle Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="middle_name" value="{{ $passengers->middle_name }}"  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Last Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="last_name" value="{{ $passengers->last_name }}"  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Phone<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="phone_number" value="{{ $passengers->phone_number }}"  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Email<span class="text-danger">*</span></label>
                                <input id="from" type="email" class="form-control" name="email" value="{{ $passengers->email }}"  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Citizenship<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="citizenship_country" value="{{ $passengers->citizenship_country }}"  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Leader Tour<span class="text-danger">*</span></label>
                                <select class="form-control" name="tourleader_tour_id">
                                    <option value="">Select Tour Leader Tour</option>
                                    @foreach ($tours as $tour)
                                      <option value="{{ $tour->id }}" {{ $passengers->tourleader_tour_id  == $tour->id ? 'selected' : '' }}>{{ $tour->tour_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Payment Type<span class="text-danger">*</span></label>
                                <select class="form-control" name="payment_id">
                                    <option value="">Select Payment Type</option>
                                    @foreach ($payments as $payment)
                                      <option value="{{ $payment->id }}" {{ $passengers->payment_id  == $payment->id ? 'selected' : '' }}>{{ $payment->payment_method }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Accomodation Type<span class="text-danger">*</span></label>
                                <select class="form-control" name="accomodation_id">
                                    <option value="">Select Departure City</option>
                                    @foreach ($accommodations as $accommodation)
                                      <option value="{{ $accommodation->id }}" {{ $passengers->accomodation_id  == $accommodation->id ? 'selected' : '' }}>{{ $accommodation->accommodation_type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Departure City<span class="text-danger">*</span></label>
                                <select class="form-control" name="departure_city_id">
                                    <option value="">Select Departure City</option>
                                    @foreach ($airports as $airport)
                                      <option value="{{ $airport->id }}" {{ $passengers->departure_city_id  == $airport->id ? 'selected' : '' }}>{{ $airport->airport_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Sharing Room With<span class="text-danger">*</span></label>
                                <select class="form-control" name="sharing_room">
                                    <option value="">Select Sharing Room With</option>
                                    @foreach ($passengers as $passenger)
                                      <option value="{{ $passenger->id }}">{{ $passenger->first_name.' '.$passenger->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Code<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="tour_code" value="{{ $passengers->tour_code }}"  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Supplement Cost<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="supplement_cost" value="{{ $passengers->supplement_cost }}"  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Date of Birth<span class="text-danger">*</span></label>
                                <input id="from" type="datetime-local" class="form-control" name="date_of_birth" value="{{ $passengers->date_of_birth }}"  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Password<span class="text-danger">*</span></label>
                                <input id="from" type="password" class="form-control" name="password" value=""  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <img src="{{ asset('uploads'.$passengers->image) }}" class="rounded" height="200" alt="Image Here">
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