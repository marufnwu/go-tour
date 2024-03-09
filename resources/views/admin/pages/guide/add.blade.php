@extends('admin.layouts.master')

@section('title','Admin | Add Guide')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('guide.index') }}">Guides</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Guide</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i>  Add Guide
                </h4>

            </div>
            <form id="ajaxForm" class="" action="{{route('guide.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">First Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="guide_first_n" value="{{ old('guide_first_n') }}"  placeholder="First Name...">
                                @error('guide_first_n')
                                    <span class="input-error">{{$message == 'The guide first n field is required.' ? 'The first name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Middle Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="guide_m_name" value="{{ old('guide_m_name') }}"  placeholder="Middle name...">
                                @error('guide_m_name')
                                    <span class="input-error">{{$message == 'The guide m name field is required.' ? 'The Middle name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Last Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="guide_l_name" value="{{ old('guide_l_name') }}"  placeholder="Last name...">
                                @error('guide_l_name')
                                    <span class="input-error">{{$message == 'The guide l name field is required.' ? 'The last name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Fees per Day<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="guide_fees_per_day" value="{{ old('guide_fees_per_day') }}"  placeholder="Fees per day...">
                                @error('guide_fees_per_day')
                                    <span class="input-error">{{$message == 'The guide fees per day field is required.' ? 'The fees per day is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Phone<span class="text-danger">*</span></label>
                                <input id="from" type="tel" class="form-control form-margin-bottom" name="guide_phone" value="{{ old('guide_phone') }}"  placeholder="guide phone...">
                                @error('guide_phone')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Email<span class="text-danger">*</span></label>
                                <input id="from" type="email" class="form-control form-margin-bottom" name="guide_email" value="{{ old('guide_email') }}"  placeholder="Guide email...">
                                @error('guide_email')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">City<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="guide_city" value="{{ old('guide_city') }}"  placeholder="Guide city...">
                                @error('guide_city')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Country<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom js-gen-itinerary" name="guide_country">
                                    <option value="">Select guide Country...</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                                @error('guide_country')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Address<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="guide_address" value="{{ old('guide_address') }}"  placeholder="Guide address...">
                                @error('guide_address')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Password<span class="text-danger">*</span></label>
                                <input id="from" type="password" class="form-control form-margin-bottom" name="password" value=""  placeholder="Password...">
                                @error('password')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
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
