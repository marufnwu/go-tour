@extends('admin.layouts.master')

@section('title','Admin | Add Airline Ticket')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('ticket_list.index') }}">Airline Ticket</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Airline Ticket</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i>  Add Airline Ticket
                </h4>

            </div>
            <form id="ajaxForm" class="" action="{{route('ticket_list.store')}}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Passenger Name<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="passenger_id">
                                    <option value="">Select Passenger</option>
                                    @foreach ($passengers as $passenger)
                                      <option value="{{ $passenger->id }}">{{ $passenger->first_name.' '.$passenger->last_name }}</option>
                                    @endforeach
                                </select>
                                @error('passenger_id')
                                    <span class="input-error">{{$message == 'The passenger id field is required.' ? 'The passenger name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Airline<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="airline">
                                    <option value="">Select Airline</option>
                                    @foreach ($suppliers as $supplier)
                                      <option value="{{ $supplier->id }}">{{ $supplier->s_first_name.' '.$supplier->s_last_name }}</option>
                                    @endforeach
                                </select>

                                @error('airline')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Ticket Price<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="ticket_price" value="{{ old('ticket_price') }}"  placeholder="Ticket price...">
                                @error('ticket_price')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Departure Date<span class="text-danger">*</span></label>
                                <input id="from" type="datetime-local" class="form-control form-margin-bottom" name="departure_date_time" value="{{ old('departure_date_time') }}">
                                @error('departure_date_time')
                                    <span class="input-error">{{$message == 'The departure date time field is required.' ? 'The departure date is required' : $message;}}</span>
                                @enderror
                            </div>                            
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Arrival Date<span class="text-danger">*</span></label>
                                <input id="from" type="datetime-local" class="form-control form-margin-bottom" name="arrival_date_time" value="{{ old('arrival_date_time') }}"  >
                                @error('arrival_date_time')
                                    <span class="input-error">{{$message == 'The arrival date time field is required.' ? 'The arrival date is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Ticket PNR<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="ticket_pnr" value="{{ old('ticket_pnr') }}"  placeholder="Ticket PNR...">
                                @error('ticket_pnr')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Departure airport<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="city_of_depart">
                                    <option value="">Select One</option>
                                    @foreach ($airports as $airport)
                                    <option value="{{ $airport->id }}">{{ $airport->airport_name }}</option>
                                    @endforeach
                                </select>
                                @error('city_of_depart')
                                    <span class="input-error">{{$message == 'The city of depart field is required.' ? 'The departure airport is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label for="" class="font-weight-bold">Arrival airport<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="city_of_arrival">
                                    <option value="">Select One</option>
                                    @foreach ($airports as $airport)
                                        <option value="{{ $airport->id }}">{{ $airport->airport_name }}</option>
                                    @endforeach
                                </select>
                                @error('city_of_arrival')
                                    <span class="input-error">{{$message == 'The city of arrival field is required.' ? 'The departure airport is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Flight Code<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="flight_code" value="{{ old('flight_code') }}"  placeholder="Flight code...">
                                @error('flight_code')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
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
                                <button id="submitBtn" type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i> Save</button>
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
