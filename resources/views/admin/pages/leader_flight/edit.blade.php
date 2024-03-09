@extends('admin.layouts.master')

@section('title','Flight Reservation | Edit')

@section('styles')
    <link href="{{ asset('/')}}admin/css/croppie.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('flight_reservation.index') }}">Flight Reservation</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Flight Reservation</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <i class="fas fa fa-desktop"></i> Edit Flight Reservation
                </h6>

            </div>
            <form id="ajaxForm" class="" action="{{route('flight_reservation.update',$flights->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Leader Tour<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="tourleader_tour_id">
                                    <option value="">Select Tour Leader Tour</option>
                                    @foreach ($tours as $tour)
                                      <option value="{{ $tour->id }}" {{ $flights->tourleader_tour_id  == $tour->id ? 'selected' : '' }}>{{ $tour->tour_name }}</option>
                                    @endforeach
                                </select>
                                @error('tourleader_tour_id')
                                    <span class="input-error">{{$message == 'The tourleader tour id field is required.' ? 'The tour leader tour field is required' : $message;}}</span>
                                @enderror
                            </div>                          
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Departure date<span class="text-danger">*</span></label>
                                <input id="from" type="date" class="form-control form-margin-bottom" name="departure_date" value="{{ $flights->departure_date }}">
                                @error('departure_date')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Departure airport<span class="text-danger">*</span></label>
                                <select name="departure_city" class="form-control form-margin-bottom">
                                    <option value="">Select departure airport...</option>
                                    @foreach($airports as $airport)
                                        <option value="{{ $airport->id }}">{{$airport->airport_name}}</option>
                                    @endforeach
                                </select>
                                @error('departure_city')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Arrival Airport<span class="text-danger">*</span></label>
                                <select name="arrival_city" class="form-control form-margin-bottom">
                                    <option value="">Select arrival airport...</option>
                                    @foreach($airports as $airport)
                                        <option value="{{ $airport->id }}">{{$airport->airport_name}}</option>
                                    @endforeach
                                </select>
                                @error('arrival_city')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
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

    <div id="uploadimageModal" class="modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header blue-gradient-rgba">
                    {{-- <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload & Crop Image</h4> --}}

                    <h5 class="modal-title my-0 py-0 text-white" id=""><i class="far fa-image"></i> Crop Image </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>


                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-xl-8 col-12 text-center mx-auto">
                            <div id="image_demo" style="width:350px; margin:auto"></div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 col-12 text-center mx-auto my-auto">
                            <button type="button" class="btn btn-outline-success crop_image"><i class="far fa-image"></i> Crop & Upload Image</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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