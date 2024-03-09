@extends('admin.layouts.master')

@section('title','Passenger | Passenger Regisrtation')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->


        <!-- DataTales Example -->
        <div class="card shadow my-5">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i>  Passenger | Create your Account
                </h4>
            </div>

            <form id="ajaxForm" class="" action="{{route('passenger_register')}}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">First Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="first_name" value=""  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Middle Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="middle_name" value=""  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Last Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="last_name" value=""  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Phone<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="phone_number" value=""  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Email<span class="text-danger">*</span></label>
                                <input id="from" type="email" class="form-control" name="email" value=""  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Citizenship<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="citizenship_country" value=""  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Code<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="tour_code" value=""  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Payment Type<span class="text-danger">*</span></label>
                                <select class="form-control" name="payment_id">
                                    <option value="">Select Payment Type</option>
                                    @foreach ($payments as $payment)
                                      <option value="{{ $payment->id }}">{{ $payment->payment_method }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Accomodation Type<span class="text-danger">*</span></label>
                                <select class="form-control" name="accomodation_id">
                                    <option value="">Select Accomodation Type</option>
                                    @foreach ($accommodations as $accommodation)
                                      <option value="{{ $accommodation->id }}">{{ $accommodation->accommodation_type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Date of Birth<span class="text-danger">*</span></label>
                                <input id="from" type="date" class="form-control" name="date_of_birth" value=""  placeholder="">
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
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Driver License or Passport Image <span class="text-danger">*</span></label>
                                <div class="controls">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile" style="color:#b5b5c3">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Leader Tour<span class="text-danger">*</span></label>
                                <select class="form-control" name="tourleader_tour_id">
                                    <option value="">Select Tour Leader Tour</option>
                                    @foreach ($tours as $tour)
                                      <option value="{{ $tour->id }}">{{ $tour->tour_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Supplement Cost<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="supplement_cost" value=""  placeholder="">
                                <p id="err-from" class="mb-0 text-danger small em"></p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Departure City<span class="text-danger">*</span></label>
                                <select class="form-control" name="departure_city_id">
                                    <option value="">Select Departure City</option>
                                    @foreach ($airports as $airport)
                                      <option value="{{ $airport->id }}">{{ $airport->airport_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Sharing Room With<span class="text-danger">*</span></label>
                                <select class="form-control" name="sharing_room">
                                    <option value="">Select Sharing Room With</option>
                                    @foreach ($passengers as $passenger)
                                      <option value="{{ $passenger->id }}">{{ $passenger->first_name.' '.$passenger->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                    </div>
                   
                </div>

                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-3 col-12"></div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <button id="submitBtn" type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i> Register</button>
                            </div>
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
           /*document.querySelector('.custom-file-input').addEventListener('change',function(e){
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
            /*reader.onload = function (event) {
                $image_crop
                    .croppie('bind', {url: event.target.result})
                    .then(function () {
                        console.log('jQuery bind complete');
                                   unbind();
                    });
            };*/
            console.log(e)
            reader.onload = (e) => {
                $('#uploaded_image').html('<img src="'+e.target.result+'" class="img-thumbnail mb-3" style="width:200px; height:220px" />');
                $('.js-avatar').val(e.target.result);
            }
            reader.readAsDataURL(this.files[0]);

            $('.custom-file-label').text(this.files[0].name);
            //$('#uploadimageModal').modal('show');
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
                    $('#uploaded_image').html('<img src="'+response+'" class="img-thumbnail mb-3" />');
                })
        });

        // Image Upload

    </script>
@endsection
