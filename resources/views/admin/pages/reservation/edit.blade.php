@extends('admin.layouts.master')

@section('title','Hotel Reservation | Edit')

@section('styles')
    <link href="{{ asset('/')}}admin/css/croppie.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                @if (auth()->user()->type=='Admin')
                    <li class="breadcrumb-item"><a href="{{ route('reservation.index') }}">Hotel Reservation</a></li>
                @else
                    <li class="breadcrumb-item"><a href="{{ route('hotel_reservation.index') }}">Hotel Reservation</a></li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">Edit Hotel Reservation</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <i class="fas fa fa-desktop"></i> Edit Reservation
                </h6>

            </div>
            <form id="ajaxForm" class="" action="{{route('reservation.update',$reservations->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    @if (auth()->user()->type=='Admin')
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Hotel Name<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="hotel_id">
                                    <option value="">Select Hotel</option>
                                    @foreach ($hotels as $hotel)
                                      <option value="{{ $hotel->id }}" {{ $reservations->hotel_id  == $hotel->id ? 'selected' : '' }}>{{ $hotel->hotel_name }}</option>
                                    @endforeach
                                </select>
                                @error('hotel_id')
                                    <span class="input-error">{{$message == 'The hotel id field is required.' ? 'The hotel name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Leader Tour<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="tourleader_tour_id" onchange="loadPassengers(this,{{$tours}})">
                                    <option value="">Select Tour Leader Tour</option>
                                    @foreach ($tours as $tour)
                                      <option value="{{ $tour->id }}" {{ $reservations->tourleader_tour_id  == $tour->id ? 'selected' : '' }}>{{ $tour->tour_name }}</option>
                                    @endforeach
                                </select>
                                @error('tourleader_tour_id')
                                    <span class="input-error">{{$message == 'The tourleader tour id field is required.' ? 'The tour leader tour is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <h6 class="font-weight-bold">Passengers in tour</h4>
                                <p id="passengers" class="form-margin-bottom" style="margin-top: 6px;"><b>{{$reservations->total_passenger}}</b> passengers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Total Single Room<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="single_room" value="{{ $reservations->single_room }}"  placeholder="">
                                @error('single_room')
                                    <span class="input-error">{{$message == 'The single room field is required.' ? 'The total single room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Total Double Room<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="double_room" value="{{ $reservations->double_room }}"  placeholder="">
                                @error('double_room')
                                    <span class="input-error">{{$message == 'The double room field is required.' ? 'The total double room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Total Triple Room<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="triple_room" value="{{ $reservations->triple_room }}"  placeholder="">
                                @error('triple_room')
                                    <span class="input-error">{{$message == 'The triple room field is required.' ? 'The total triple room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Price for Single<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="single_room_price" value="{{ $reservations->single_room_price }}"  placeholder="">
                                @error('single_room_price')
                                    <span class="input-error">{{$message == 'The single room price field is required.' ? 'The single price room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Price for Double<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="double_room_price" value="{{ $reservations->double_room_price }}"  placeholder="">
                                @error('triple_room')
                                    <span class="input-error">{{$message == 'The doublt room price field is required.' ? 'The double price room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Price for Triple<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="triple_room_price" value="{{ $reservations->triple_room_price }}"  placeholder="">
                                @error('triple_room')
                                    <span class="input-error">{{$message == 'The triple room price field is required.' ? 'The triple price room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">From Date<span class="text-danger">*</span></label>
                                <input id="to" type="date" class="form-control form-margin-bottom" name="from_date" value="{{ $reservations->from_date }}"  placeholder="">
                                @error('from_date')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">To Date<span class="text-danger">*</span></label>
                                <input id="to" type="date" class="form-control form-margin-bottom" name="to_date" value="{{ $reservations->to_date }}"  placeholder="">
                                @error('to_date')
                                    <span class="input-error">{{$message;}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Reservation Date<span class="text-danger">*</span></label>
                                <input id="to" type="date" class="form-control form-margin-bottom" name="reservation_date" value="{{ $reservations->reservation_date }}"  placeholder="">
                                @error('reservation_date')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Confirmation Date<span class="text-danger">*</span></label>
                                <input id="to" type="date" class="form-control form-margin-bottom" name="confirmation_date" value="{{ $reservations->confirmation_date }}"  placeholder="">
                                @error('confirmation_date')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Leader Tour<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="tourleader_tour_id" onchange="loadPassengers(this,{{$tours}})">
                                    <option value="">Select Tour Leader Tour</option>
                                    @foreach ($tours as $tour)
                                      <option value="{{ $tour->id }}" {{ $reservations->tourleader_tour_id  == $tour->id ? 'selected' : '' }}>{{ $tour->tour_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <h6 class="font-weight-bold">Passengers in tour</h4>
                                <p id="passengers" class="form-margin-bottom" style="margin-top: 6px;"><b>{{$tours->total_passenger}}</b>passengers</p>
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Total Single Room<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="single_room" value="{{ $reservations->single_room }}"  placeholder="Total single room...">
                                @error('single_room')
                                    <span class="input-error">{{$message == 'The single room field is required.' ? 'The total single room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Total Double Room<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="double_room" value="{{ $reservations->double_room }}"  placeholder="Total double room...">
                                @error('double_room')
                                    <span class="input-error">{{$message == 'The double room field is required.' ? 'The total double room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Total Triple Room<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="triple_room" value="{{ $reservations->triple_room }}"  placeholder="Total triple room...">
                                @error('triple_room')
                                    <span class="input-error">{{$message == 'The triple room field is required.' ? 'The total triple room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Single room price<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="single_room_price" value="{{ $reservations->single_room_price }}"  placeholder="Single room price...">
                                @error('single_room_price')
                                    <span class="input-error">{{$message == 'The single room price field is required.' ? 'The single price room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Double room price<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="double_room_price" value="{{ $reservations->double_room_price }}"  placeholder="Double room price...">
                                @error('double_room_price')
                                    <span class="input-error">{{$message == 'The double room price field is required.' ? 'The double price room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Triple room price<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="triple_room_price" value="{{ $reservations->triple_room_price }}"  placeholder="Triple room price...">
                                @error('triple_room_price')
                                    <span class="input-error">{{$message == 'The triple room price field is required.' ? 'The triple price room is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">From Date<span class="text-danger">*</span></label>
                                <input id="to" type="date" class="form-control form-margin-bottom" name="from_date" value="{{ $reservations->from_date }}">
                                @error('from_date')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">To Date<span class="text-danger">*</span></label>
                                <input id="to" type="date" class="form-control form-margin-bottom" name="to_date" value="{{ $reservations->to_date }}">
                                @error('to_date')
                                    <span class="input-error">{{$message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Reservation Date<span class="text-danger">*</span></label>
                                <input id="to" type="date" class="form-control form-margin-bottom" name="reservation_date" value="{{ $reservations->reservation_date }}">
                                @error('reservation_date')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Confirmation Date<span class="text-danger">*</span></label>
                                <input id="to" type="date" class="form-control form-margin-bottom" name="confirmation_date" value="{{ $reservations->confirmation_date }}">
                                @error('confirmation_date')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    @endif
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
        let passengerContainer = document.getElementById('passengers')


        const loadPassengers = (value,tours) => {

            passengerContainer.innerHTML = ''; // Clear the options
      
            const selectedValue = value.value;
            
           for (var i = 0; i < tours.length; i++) {
                if (tours[i].id == selectedValue) {
                    passengerContainer.innerHTML = `<b>${tours[i].passengers}</b> Passengers.`;
                }
           }
        }

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