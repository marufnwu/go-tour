@extends('admin.layouts.master')

@section('title','Admin | Add Tour Leader')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('tourleaders.index') }}">Manage Tour Leader</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Tour Leader</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i>  Tour Leader Information
                </h4>

            </div>
            <form id="ajaxForm" class="" action="{{route('tourleaders.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">First Name <span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="fname" value="{{ old('fname') }}"  placeholder="First name...">
                                @error('fname')
                                    <span class="input-error">{{$message == 'The fname field is required.' ? 'The first name field is required' : $message;}}</span>
                                @enderror                            
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Middle Name<span class="text-danger">*</span></label>
                                <input id="to" type="text" class="form-control form-margin-bottom" name="mname" value="{{ old('mname') }}"  placeholder="Middle name...">
                                @error('mname')
                                    <span class="input-error">{{$message == 'The mname field is required.' ? 'The middle name field is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                              <label for="" class="font-weight-bold">Last Name<span class="text-danger">*</span></label>
                              <input id="to" type="text" class="form-control form-margin-bottom" name="lname" value="{{ old('lname') }}"  placeholder="Last Name...">
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
                            <input id="to" type="text" class="form-control form-margin-bottom" name="address" value="{{ old('address') }}"  placeholder="Address...">
                            @error('address')
                                <span class="input-error">{{$message}}</span>
                            @enderror 
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">City<span class="text-danger ">*</span></label>
                            <input id="to" type="text" class="form-control form-margin-bottom" name="city" value="{{ old('city') }}"  placeholder="City">
                            @error('city')
                                <span class="input-error">{{$message}}</span>
                            @enderror 
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">State<span class="text-danger">*</span></label>
                            <input id="to" type="text" class="form-control form-margin-bottom" name="state" value="{{ old('state') }}"  placeholder="State">
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
                            <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="zip" value="{{ old('zip') }}"  placeholder="Zip Code...">
                            @error('zip')
                                <span class="input-error">{{$message}}</span>
                            @enderror 
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Church Name<span class="text-danger">*</span></label>
                            <input id="to" type="text" class="form-control form-margin-bottom" name="chname" value="{{ old('chname') }}"  placeholder="Church name...">
                            @error('chname')
                                <span class="input-error">{{$message == 'The chname field is required.' ? 'The church name field is required' : $message;}}</span>
                            @enderror
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Church Denomination<span class="text-danger">*</span></label>
                            <input id="to" type="text" class="form-control form-margin-bottom" name="chdenomination" value="{{ old('chdenomination') }}"  placeholder="Church denomination...">
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
                            <input id="to" type="number" min="0" class="form-control form-margin-bottom" name="chmember" value="{{ old('chmember') }}"  placeholder="Church members...">
                            @error('chmember')
                                <span class="input-error">{{$message == 'The chmember field is required.' ? 'The church members field is required' : $message;}}</span>
                            @enderror
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Church Phone<span class="text-danger">*</span></label>
                            <input id="to" type="tel" class="form-control form-margin-bottom" name="chphone" value="{{ old('chphone') }}"  placeholder="Church phone">
                            @error('chphone')
                                <span class="input-error">{{$message == 'The chphone field is required.' ? 'The church phone field is required' : $message;}}</span>
                            @enderror
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Church Email<span class="text-danger">*</span></label>
                            <input id="to" type="email" class="form-control form-margin-bottom" name="chemail" value="{{ old('chemail') }}"  placeholder="Church email">
                            @error('chemail')
                                <span class="input-error">{{$message == 'The chemail field is required.' ? 'The church email field is required' : $message;}}</span>
                            @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tour Leader Email<span class="text-danger">*</span></label>
                            <input id="to" type="email" class="form-control form-margin-bottom" name="email" value="{{ old('email') }}"  placeholder="Tour leader email...">
                            @error('email')
                                <span class="input-error">{{$message}}</span>
                            @enderror 
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tour Leader Phone<span class="text-danger">*</span></label>
                            <input id="to" type="tel" class="form-control form-margin-bottom" name="phone" value="{{ old('phone') }}"  placeholder="Tour leader phone...">
                            @error('phone')
                                <span class="input-error">{{$message}}</span>
                            @enderror 
                        </div>
                      </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Password <span class="text-danger">*</span></label>
                                <input id="to" type="password" class="form-control form-margin-bottom" name="password" value=""  placeholder="Password...">
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
                                <input id="customFile" type="file" class="form-margin-bottom" name="image" value="{{ old('image') }}">
                                @error('image')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-lg-12 py-2">
                            <img src="" class="prevel rounded" id="imgprev" style="display: none; width: 100%; height:300px; object-fit: contain;">
                            <h5 id="profile-img-prev" style="display: none;text-align:center; margin-top: 0.5rem">Image preview</h5>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-3 col-12"></div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <button id="" type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i> Save</button>
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
