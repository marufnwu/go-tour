@extends('admin.layouts.master')

@section('title','Admin | Add Reservation')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('reservetransport.index') }}">Transportation Reservation</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Reservation</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i>  Add Reservation
                </h4>

            </div>
            <form id="ajaxForm" class="" action="{{route('reservetransport.store')}}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Leader Tour<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="tourleader_tour_id">
                                    <option value="{{ old('tourleader_tour_id') }}">Select Tour Leader Tour</option>
                                    @foreach ($tours as $tour)
                                      <option value="{{ $tour->id }}">{{ $tour->tour_name }}</option>
                                    @endforeach
                                </select>
                                @error('tourleader_tour_id')
                                    <span class="input-error">{{$message == 'The tourleader tour id field is required.' ? 'The tour leader is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Supplier<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="supplier_id">
                                    <option value="{{ old('supplier_id') }}">Select Supplier</option>
                                    @foreach ($supps as $supp)
                                      <option value="{{ $supp->id }}">{{ $supp->s_first_name .' '.  $supp->s_last_name}} ({{ $supp->type=='BC' ? 'Transport Supplier' : 'Airline Ticket Supplier' }})</option>
                                    @endforeach
                                </select>
                                @error('supplier_id')
                                    <span class="input-error">{{$message == 'The supplier id field is required.' ? 'The supplier is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Transportation Cost<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="transport_cost" value="{{ old('transport_cost') }}"  placeholder="Transportation Cost...">
                                @error('transport_cost')
                                    <span class="input-error">{{$message;}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Date of Service<span class="text-danger">*</span></label>
                                <input id="to" type="date" class="form-control form-margin-bottom" name="service_date" value="{{ old('service_date') }}" >
                                @error('service_date')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Confirmation Date<span class="text-danger">*</span></label>
                                <input id="to" type="date" class="form-control form-margin-bottom" name="confirm_date" value="{{ old('confirm_date') }}">
                                @error('confirm_date')
                                    <span class="input-error">{{$message == 'The confirm date field is required.' ? 'The confirmation date is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Confirm Price<span class="text-danger">*</span></label>
                                <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="confirm_price" value="{{ old('confirm_price') }}"  placeholder="Confirm Price...">
                                @error('confirm_price')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Transportation type<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="transport_type">
                                    <option value="">Select transport type</option>
                                    @foreach ($Transporttypes as $type)
                                      <option value="{{ $type->id }}">{{$type->type_name}}</option>
                                    @endforeach
                                </select>
                                @error('transport_type')
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
