@extends('admin.layouts.master')

@section('title','Admin | Add Tour Leader Tour')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('tourleader_tour.index') }}">Tour Leader Tour</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Tour Leader Tour</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i>  Add Tour Leader Tour
                </h4>

            </div>
            <form id="ajaxForm" class="" action="{{route('tourleader_tour.store')}}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Code<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="tour_code" value="{{ old('tour_code') }}"  placeholder="Tour Code...">
                                @error('tour_code')
                                    <span class="input-error">{{$message}}</span>
                                @enderror 
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Cost<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="tour_cost" value="{{ old('tour_cost') }}"  placeholder="Tour Cost...">
                                @error('tour_cost')
                                    <span class="input-error">{{$message}}</span>
                                @enderror 
                            </div>
                        </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Language<span class="text-danger">*</span></label>
                            <select class="form-control form-margin-bottom" name="language">
                              <option value="">Select language</option>
                              @foreach ($languages as $language)
                                <option value="{{ $language }}">{{ $language }}</option>
                              @endforeach
                            </select>
                            @error('language')
                                <span class="input-error">{{$message}}</span>
                            @enderror 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Leader Name<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="tourleader_id">
                                  <option value="">Select Tour Leader</option>
                                  @foreach ($tourleaders as $tourleader)
                                    <option value="{{ $tourleader->id }}">{{ $tourleader->tlfirst_n .' '. $tourleader->ti_l_name}}</option>
                                  @endforeach
                                </select>
                                @error('tourleader_id')
                                    <span class="input-error">{{$message == 'The tourleader id field is required.' ? 'The tour leader name field is required' : $message;}}</span>
                                @enderror 
                            </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                              <label for="" class="font-weight-bold">General Tour Itinerary<span class="text-danger">*</span></label>
                              <select class="form-control form-margin-bottom" name="gti_id">
                                <option value="{{ old('gti_id') }}">Select GTI</option>
                                @foreach ($gtis as $gti)
                                  <option value="{{ $gti->id }}">{{ $gti->gti_name}}</option>
                                @endforeach
                              </select>
                                @error('gti_id')
                                    <span class="input-error">{{$message == 'The gti id field is required.' ? 'The gti field is required' : $message;}}</span>
                                @enderror 
                          </div>
                      </div>
                      <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Passengers<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="passengers" value="{{ old('passengers') }}"  placeholder="Approximate passengers...">
                                @error('passengers')
                                    <span class="input-error">{{$message}}</span>
                                @enderror 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Tour Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="tour_name" value="{{ old('tour_name') }}"  placeholder="Tour Name...">
                                @error('tour_name')
                                    <span class="input-error">{{$message}}</span>
                                @enderror 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Departure Date<span class="text-danger">*</span></label>
                                <input id="from" type="date" class="form-control form-margin-bottom" name="athens_departure_date" value="{{ old('athens_departure_date') }}"  placeholder="">
                                @error('athens_departure_date')
                                    <span class="input-error">{{$message == 'The athens departure date field is required.' ? 'The departure date is required' : $message;}}</span>
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
