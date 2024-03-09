@extends('admin.layouts.master')

@section('title','Hotel | Edit')

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
                <li class="breadcrumb-item"><a href="{{ route('hotel.index') }}">Hotel</a></li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">Edit Hotel</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <i class="fas fa fa-desktop"></i> Edit Hotel
                </h6>

            </div>
            <form id="ajaxForm" class="" action="{{route('hotel.update',$hotels->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Hotel Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="hotel_name" value="{{ $hotels->hotel_name }}"  placeholder="hotel name...">
                                @error('hotel_name')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Hotel Address<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="hotel_address" value="{{ $hotels->hotel_address }}"  placeholder="hotel address...">
                                @error('hotel_address')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @if(auth()->user()->type == 'Admin' || auth()->user()->type == 'OP')
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Hotel Email<span class="text-danger">*</span></label>
                                <input id="from" type="email" class="form-control form-margin-bottom" name="hotel_email" value="{{ $hotels->hotel_email }}"  placeholder="hotel email...">
                                @error('hotel_email')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        @endif
                        <div class="{{auth()->user()->type == 'Admin' || auth()->user()->type == 'OP'?'col-lg-4':'col-lg-6'}}">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Hotel Phone<span class="text-danger">*</span></label>
                                <input id="from" type="number" class="form-control form-margin-bottom" name="hotel_phone" value="{{ $hotels->hotel_phone }}"  placeholder="hotel phone...">
                                @error('hotel_phone')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="{{auth()->user()->type == 'Admin' || auth()->user()->type == 'OP'?'col-lg-4':'col-lg-6'}}">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Hotel City<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="hotel_city" value="{{ $hotels->hotel_city }}"  placeholder="hotel city...">
                                @error('hotel_city')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Hotel Country<span class="text-danger">*</span></label>
                                    <select name="hotel_country" class="form-control form-margin-bottom">
                                    <option value="">Select country...</option>
                                        @foreach ($countries as $country)
                                          <option value="{{ $country }}" {{$hotels->hotel_country == $country?'selected':''}}>{{ $country }}</option>
                                        @endforeach
                                    </select>
                                    @error('hotel_country')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Password<span class="text-danger">*</span></label>
                                <input id="from" type="password" class="form-control form-margin-bottom" name="password" value=""  placeholder="password...">
                                @error('password')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
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
                        <div class="col-lg-6 py-2">
                            <img src="{{asset('uploads/hotel-profile/'.$hotels->image)}}" class="prevel rounded" id="imgprev" style=" width: 100%; height:300px; object-fit: contain;" alt="profile image">
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