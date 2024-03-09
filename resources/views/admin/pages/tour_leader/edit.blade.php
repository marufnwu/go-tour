@extends('admin.layouts.master')

@section('title','Edit Tour Leader')

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
                    <li class="breadcrumb-item"><a href="{{ route('tourleaders.index') }}">Manage Tour Leader</a></li>
                @endif
                <li class="breadcrumb-item active" aria-current="page"> Edit Tour Leader Information</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <i class="fas fa fa-desktop"></i> Edit Tour Leader Information
                </h6>

            </div>
            <form id="ajaxForm" class="" action="{{route('tourleaders.update',$tourleaders->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">First Name <span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="fname" value="{{ $tourleaders->tlfirst_n }}"  placeholder="">
                                @error('fname')
                                    <span class="input-error">{{$message == 'The fname field is required.' ? 'The first name field is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Middle Name<span class="text-danger">*</span></label>
                                <input id="to" type="text" class="form-control form-margin-bottom" name="mname" value="{{ $tourleaders->tl_m_name }}"  placeholder="">
                                @error('mname')
                                    <span class="input-error">{{$message == 'The mname field is required.' ? 'The middle name field is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                              <label for="" class="font-weight-bold">Last Name<span class="text-danger">*</span></label>
                              <input id="to" type="text" class="form-control form-margin-bottom" name="lname" value="{{ $tourleaders->ti_l_name }}"  placeholder="">
                              @error('lname')
                                    <span class="input-error">{{$message == 'The lname field is required.' ? 'The last name field is required' : $message;}}</span>
                                @enderror
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Address<span class="text-danger">*</span></label>
                            <input id="to" type="text" class="form-control form-margin-bottom" name="address" value="{{ $tourleaders->address }}"  placeholder="">
                            @error('address')
                                <span class="input-error">{{$message}}</span>
                            @enderror 
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">City<span class="text-danger">*</span></label>
                            <input id="to" type="text" class="form-control form-margin-bottom" name="city" value="{{ $tourleaders->city }}"  placeholder="">
                            @error('city')
                                <span class="input-error">{{$message}}</span>
                            @enderror 
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">State<span class="text-danger">*</span></label>
                            <input id="to" type="text" class="form-control form-margin-bottom" name="state" value="{{ $tourleaders->state }}"  placeholder="">
                            @error('state')
                                <span class="input-error">{{$message}}</span>
                            @enderror 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Zip<span class="text-danger">*</span></label>
                            <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="zip" value="{{ $tourleaders->zip }}"  placeholder="">
                            @error('zip')
                                <span class="input-error">{{$message}}</span>
                            @enderror 
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Church Name<span class="text-danger">*</span></label>
                            <input id="to" type="text" class="form-control form-margin-bottom" name="chname" value="{{ $tourleaders->church_name }}"  placeholder="">
                            @error('chname')
                                <span class="input-error">{{$message == 'The chname field is required.' ? 'The church name field is required' : $message;}}</span>
                            @enderror
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Church Denomination<span class="text-danger">*</span></label>
                            <input id="to" type="text" class="form-control form-margin-bottom" name="chdenomination" value="{{ $tourleaders->church_denomination }}"  placeholder="">
                            @error('chdenomination')
                                <span class="input-error">{{$message == 'The chdenomination field is required.' ? 'The denomination field is required' : $message;}}</span>
                            @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Church Members<span class="text-danger">*</span></label>
                            <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="chmember" value="{{ $tourleaders->church_members }}"  placeholder="">
                            @error('chmember')
                                <span class="input-error">{{$message == 'The chmember field is required.' ? 'The church members field is required' : $message;}}</span>
                            @enderror
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Church Phone<span class="text-danger">*</span></label>
                            <input id="to" type="tel" class="form-control form-margin-bottom" name="chphone" value="{{ $tourleaders->church_phone }}"  placeholder="">
                            @error('chphone')
                                <span class="input-error">{{$message == 'The chphone field is required.' ? 'The church phone field is required' : $message;}}</span>
                            @enderror
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Church Email<span class="text-danger">*</span></label>
                            <input id="to" type="email" class="form-control form-margin-bottom" name="chemail" value="{{ $tourleaders->church_email }}"  placeholder="">
                            @error('chemail')
                                <span class="input-error">{{$message == 'The chemail field is required.' ? 'The church email field is required' : $message;}}</span>
                            @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    @if(auth()->user()->type == 'Admin')
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Email<span class="text-danger">*</span></label>
                            <input id="to" type="email" class="form-control form-margin-bottom" name="email" value="{{ $tourleaders->th_email }}" placeholder="">
                            @error('email')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                      </div>
                    @endif
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Phone<span class="text-danger">*</span></label>
                            <input id="to" type="tel" class="form-control form-margin-bottom" name="phone" value="{{ $tourleaders->th_phone }}"  placeholder="">
                            @error('phone')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                      </div>
                        <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Password<span class="text-danger">*</span></label>
                                    <input id="from" type="password" class="form-control form-margin-bottom" name="password" value=""  placeholder="Password...">
                                    @error('password')
                                        <span class="input-error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="row">
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
                            <img src="{{asset('uploads/leader-profile/'.$tourleaders->image)}}" class="prevel rounded" id="imgprev" style=" width: 100%; height:300px; object-fit: contain;" alt="profile image">
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
