@extends('admin.layouts.master')

@section('title','Admin | Add Passenger Payment')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('payment_passenger.index') }}">Passenger Payment</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Payment</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i>  Add Payment
                </h4>

            </div>
            <form id="ajaxForm" class="" action="{{route('payment_passenger.store')}}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Payment Type<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="type_id">
                                    <option value="">Select Payment Type</option>
                                    @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->payment_method }}</option>
                                    @endforeach
                                </select>
                                @error('type_id')
                                <span class="input-error">{{$message == 'The type id field is required.' ? 'The payment type is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Payment References<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="payment_references" value="{{ old('payment_references')}}"  placeholder="Payment references...">
                                @error('payment_references')
                                <span class="input-error">{{$message == 'The payment references field is required.' ? 'The payment references are required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Payment date<span class="text-danger">*</span></label>
                                <input id="from" type="date" class="form-control form-margin-bottom" name="date_of_payment" value="{{ old('date_of_payment')}}"  placeholder="Payment date...">
                                @error('date_of_payment')
                                    <span class="input-error">{{$message == 'The date of payment field is required.' ? 'The payment date is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Amount<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="amount" value="{{ old('amount')}}"  placeholder="Amount...">
                                @error('amount')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        @if (auth()->user()->type=='Admin' || auth()->user()->type=='OP')
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Passenger Name<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="passenger_id">
                                    <option value="">Select Passenger</option>
                                    @foreach ($passengers as $passenger)
                                    {{$passengerName = $passenger->first_name.' '.$passenger->last_name}}
                                    <option value="{{ $passenger->id }}">{{ $passengerName }}</option>
                                    @endforeach
                                </select>
                                @error('passenger_id')
                                <span class="input-error">{{$message == 'The passenger id field is required.' ? 'The passenger name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>         
                        @endif                     
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
