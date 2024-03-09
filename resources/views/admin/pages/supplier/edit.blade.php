@extends('admin.layouts.master')

@section('title','Suppliers | Edit')

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
                <li class="breadcrumb-item"><a href="{{ route('supplier.index') }}">Suppliers</a></li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">Edit Supplier</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <i class="fas fa fa-desktop"></i> Edit Supplier
                </h6>

            </div>
            <form id="ajaxForm" class="" action="{{route('supplier.update',$suppliers->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Supplier Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="s_first_name" value="{{ $suppliers->s_first_name }}"  placeholder="Supplier Name...">
                                @error('s_first_name')
                                    <span class="input-error">{{$message == 'The s first name field is required.' ? 'The supplier name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Last Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="s_last_name" value="{{ $suppliers->s_last_name }}"  placeholder="Last Name...">
                                @error('s_last_name')
                                    <span class="input-error">{{$message == 'The s last name field is required.' ? 'The supplier name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">City<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="s_city" value="{{ $suppliers->s_city }}"  placeholder="Supplier city...">
                                @error('s_city')
                                    <span class="input-error">{{$message == 'The s city field is required.' ? 'The supplier city is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="{{auth()->user()->type == 'Admin' || auth()->user()->type == 'OP'?'col-lg-4':'col-lg-6'}}">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Password<span class="text-danger">*</span></label>
                                <input id="from" type="password" class="form-control form-margin-bottom" name="s_password" value=""  placeholder="Enter New Password...">
                                @error('s_password')
                                    <span class="input-error">{{$message == 'The s password field is required.' ? 'The password is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="{{auth()->user()->type == 'Admin' || auth()->user()->type == 'OP'?'col-lg-4':'col-lg-6'}}">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Phone<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="s_phone" value="{{ $suppliers->s_phone }}"  placeholder="Supplier phone...">
                                @error('s_phone')
                                    <span class="input-error">{{$message == 'The s phone field is required.' ? 'The supplier phone is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        @if(auth()->user()->type == 'Admin' || auth()->user()->type == 'OP')
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Email<span class="text-danger">*</span></label>
                                <input id="from" type="email" class="form-control form-margin-bottom" name="s_email" value="{{ $suppliers->s_email }}"  placeholder="Supplier email...">
                                @error('s_email')
                                    <span class="input-error">{{$message == 'The s email field is required.' ? 'The supplier email is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Country<span class="text-danger">*</span></label>
                                <select name="s_country" class="form-control form-margin-bottom">
                                    <option value="">Select country...</option>
                                    @foreach ($countries as $country)
                                      <option value="{{ $country }}" {{$suppliers->s_country == $country?'selected':''}}>{{ $country }}</option>
                                    @endforeach
                                </select>
                                @error('s_country')
                                    <span class="input-error">{{$message == 'The s country field is required.' ? 'The supplier country is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        @if(auth()->user()->type == 'Admin' || auth()->user()->type == 'OP')
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Supplier Type<span class="text-danger">*</span></label>
                                <select name="type" id="" class="form-control form-margin-bottom">
                                    <option value="">Select Type</option>
                                    <option value="ATP" {{ $suppliers->type=='ATP' ? 'selected' : '' }}>Airline</option>
                                    <option value="BC" {{ $suppliers->type=='BC' ? 'selected' : '' }}>Ground transportation</option>

                                </select>
                                @error('type')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        @endif
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
                        <div class="col-lg-12 py-2">
                            <img src="{{asset('uploads/supplier-profile/'.$suppliers->image)}}" class="prevel rounded" id="imgprev" style=" width: 100%; height:300px; object-fit: contain;" alt="profile image">
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