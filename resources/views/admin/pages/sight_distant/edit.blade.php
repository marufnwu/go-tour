@extends('admin.layouts.master')

@section('title','Admin | Edit Sight Distant')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sight_distant.index') }}">Sight Distant</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Sight Distant</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i>  Edit Sight Distant
                </h4>

            </div>
            <form id="ajaxForm" class="" action="{{route('sight_distant.update',$sightdistants->id)}}" method="POST">
            @csrf
            @method('put')
              <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Distant Sight Name<span class="text-danger">*</span></label>
                            <input id="from" type="text" class="form-control form-margin-bottom" name="distant_sight_name" value="{{ $sightdistants->distant_sight_name }}"  placeholder="sight distance name...">
                            @error('distant_sight_name')
                                <span class="input-error">{{$message == 'The distant sight name field is required.' ? 'The sight distance name is required' : $message;}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="" class="font-weight-bold">Country<span class="text-danger">*</span></label>
                        <select class="form-control form-margin-bottom" name="country_id">
                          <option value="">Select Country</option>
                          @foreach ($countries as $country)
                            <option value="{{ $country->id }} " {{ $sightdistants->country_id  == $country->id ? 'selected' : '' }}>{{ $country->country_name }}</option>
                          @endforeach
                        </select>
                        @error('country_id')
                            <span class="input-error">{{$message == 'The country id field is required.' ? 'The country field is required' : $message;}}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="" class="font-weight-bold">City<span class="text-danger">*</span></label>
                        <select class="form-control form-margin-bottom" name="city_id">
                          <option value="">Select City</option>
                          @foreach ($cities as $city)
                            <option value="{{ $city->id }} " {{ $sightdistants->city_id  == $city->id ? 'selected' : '' }}>{{ $city->city_name }}</option>
                          @endforeach
                        </select>
                        @error('city_id')
                            <span class="input-error">{{$message == 'The city id field is required.' ? 'The city field is required' : $message;}}</span>
                        @enderror
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label for="" class="font-weight-bold">First Sight<span class="text-danger">*</span></label>
                        <select class="form-control form-margin-bottom" name="first_site">
                            <option value="">Select One</option>
                            @foreach ($sights as $sight)
                              <option value="{{ $sight->sight_name }}" {{ $sightdistants->first_site  == $sight->sight_name ? 'selected' : '' }}>{{ $sight->sight_name }}</option>
                            @endforeach
                        </select>
                        @error('first_site')
                            <span class="input-error">{{$message}}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Second Sight<span class="text-danger">*</span></label>
                        <select class="form-control form-margin-bottom" name="second_site">
                            <option value="">Select One</option>
                            @foreach ($sights as $sight)
                              <option value="{{ $sight->sight_name }}" {{ $sightdistants->second_site  == $sight->sight_name ? 'selected' : '' }}>{{ $sight->sight_name }}</option>
                            @endforeach
                        </select>
                        @error('second_site')
                            <span class="input-error">{{$message}}</span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Sight Distant<span class="text-danger">*</span></label>
                        <input id="to" type="text" class="form-control form-margin-bottom" name="sight_distant" value="{{ $sightdistants->sight_distant }}"  placeholder="Sight distance...">
                        @error('sight_distant')
                            <span class="input-error">{{$message == 'The sight distant field is required.' ? 'The sight distance field is required' : $message;}}</span>
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
