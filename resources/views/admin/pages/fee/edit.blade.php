@extends('admin.layouts.master')

@section('title','Fee | Edit')

@section('styles')
    <link href="{{ asset('/')}}admin/css/croppie.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('fee.index') }}">Fee</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Fee</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <i class="fas fa fa-desktop"></i> Edit Fee
                </h6>

            </div>
            <form id="ajaxForm" class="" action="{{route('fee.update',$fees->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Hotel Name<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="hotel_id">
                                    <option value="">Select Hotel</option>
                                    @foreach ($hotels as $hotel)
                                      <option value="{{ $hotel->id }}" {{ $fees->hotel_id  == $hotel->id ? 'selected' : '' }}>{{ $hotel->hotel_name }}</option>
                                    @endforeach
                                </select>
                                @error('hotel_id')
                                    <span class="input-error">{{$message == 'The hotel id field is required.' ? 'The hotel name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Accommodation Type<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="accommodation_type_id">
                                    <option value="">Select Accommodation Type</option>
                                    @foreach ($accommodations as $accommodation)
                                      <option value="{{ $accommodation->id }}" {{ $fees->accommodation_type_id  == $accommodation->id ? 'selected' : '' }}>{{ $accommodation->accommodation_type_name }}</option>
                                    @endforeach
                                </select>
                                @error('accommodation_type_id')
                                    <span class="input-error">{{$message == 'The accommodation type id field is required.' ? 'The Accommodation Type is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Price<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="price" value="{{ $fees->price }}"  placeholder="price...">
                                @error('price')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Date From<span class="text-danger">*</span></label>
                                <input id="from" type="date" class="form-control form-margin-bottom" name="from_date" value="{{ $fees->from_date }}">
                                @error('from_date')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Date To<span class="text-danger">*</span></label>
                                <input id="from" type="date" class="form-control form-margin-bottom" name="to_date" value="{{ $fees->to_date }}">
                                @error('to_date')
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