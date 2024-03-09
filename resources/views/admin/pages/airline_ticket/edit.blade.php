@extends('admin.layouts.master')

@section('title','Airline Ticket | Edit')

@section('styles')
    <link href="{{ asset('/')}}admin/css/croppie.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin') ?route('ticket_list.index') : route('passenger.pass_to_be_ticket')}}">Airline Ticket</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Airline Ticket</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <i class="fas fa fa-desktop"></i> Edit Airline Ticket
                </h6>

            </div>
            <form id="ajaxForm" class="" action="{{route('ticket_list.update',$tickets->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Departure airport<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="city_of_depart">
                                    <option value="">Select One</option>
                                    @foreach ($airports as $airport)
                                        <option value="{{ $airport->id }}">{{ $airport->airport_name}}</option>
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
                                <label for="" class="font-weight-bold">Ticket Price<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control" name="ticket_price" value="{{ $tickets->ticket_price }}"  placeholder="Ticket price...">
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
                                <input id="from" type="datetime-local" class="form-control" name="departure_date_time" value="{{ $tickets->departure_date_time }}">
                                @error('departure_date_time')
                                    <span class="input-error">{{$message == 'The departure date time field is required.' ? 'The departure date is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Arrival Date<span class="text-danger">*</span></label>
                                <input id="from" type="datetime-local" class="form-control" name="arrival_date_time" value="{{ $tickets->arrival_date_time }}">
                                @error('arrival_date_time')
                                    <span class="input-error">{{$message == 'The arrival date time field is required.' ? 'The arrival date is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Ticket PNR<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control" name="ticket_pnr" value="{{ $tickets->ticket_pnr }}"  placeholder="Ticket PNR...">
                                @error('ticket_pnr')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Flight Code<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="flight_code" value="{{ $tickets->ticket_pnr }}"  placeholder="Flight code...">
                                @error('flight_code')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Passenger Name<span class="text-danger">*</span></label>
                                <select class="form-control" name="passenger_id">
                                    <option value="">Select Passenger</option>
                                    @foreach ($passengers as $passenger)
                                      <option value="{{ $passenger->id }}" {{ $tickets->passenger_id  == $passenger->id ? 'selected' : '' }}>{{ $passenger->first_name.' '.$passenger->last_name }}</option>
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
                        @else
                        <div class="col-lg-4">
                            <div class="form-group">
                                <h6 class="font-weight-bold">Passenger</h6>
                                <h6 class="form-control form-margin-bottom">{{$tickets->psngr->first_name.' '.$tickets->psngr->last_name}}</h6>
                            </div>
                        </div>
                        @endif
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