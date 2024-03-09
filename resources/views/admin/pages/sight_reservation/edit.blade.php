@extends('admin.layouts.master')

@section('title','Admin | Edit Sight Reservation')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sight_reservation.index') }}">Sight Reservation</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Sight Reservation</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i>  Edit Sight Reservation
                </h4>

            </div>
            <form id="ajaxForm" class="" action="{{route('sight_reservation.update',$sightreservations->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Sight Reservation<span class="text-danger">*</span></label>
                            <input id="from" type="text" class="form-control form-margin-bottom" name="sight_reservation" value="{{ $sightreservations->sight_reservation }}"  placeholder="New sight reservation...">
                            @error('sight_reservation')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Sight Name<span class="text-danger">*</span></label>
                            <select class="form-control form-margin-bottom" name="sight_id">
                              <option value="">Select Sight</option>
                              @foreach ($sights as $sight)
                                <option value="{{ $sight->id }}" {{ $sightreservations->sight_id  == $sight->id ? 'selected' : '' }}>{{ $sight->sight_name }}</option>
                              @endforeach
                            </select>
                            @error('sight_id')
                                <span class="input-error">{{$message == 'The sight id field is required.' ? 'The sight name is required' : $message;}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tour Leader Tour<span class="text-danger">*</span></label>
                            <select class="form-control form-margin-bottom" name="tour_leader_tour_id">
                              <option value="">Select Tour Leader Tour</option>
                              @foreach ($tours as $tour)
                                <option value="{{ $tour->id }}" {{ $sightreservations->tour_leader_tour_id  == $tour->id ? 'selected' : '' }}>{{ $tour->tour_name }}</option>
                              @endforeach
                            </select>
                            @error('tour_leader_tour_id')
                                <span class="input-error">{{$message == 'The tour leader tour id field is required.' ? 'The tour leader tour is required' : $message;}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Reservation Date<span class="text-danger">*</span></label>
                            <input id="to" type="date" class="form-control form-margin-bottom" name="reservation_date" value="{{ $sightreservations->reservation_date }}"  placeholder="New reservation date">
                            @error('reservation_date')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Confirmation Date<span class="text-danger">*</span></label>
                            <input id="to" type="date" class="form-control form-margin-bottom" name="confirmation_date" value="{{ $sightreservations->confirmation_date }}"  placeholder="New confirmation date">
                            @error('confirmation_date')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Sight visit date<span class="text-danger">*</span></label>
                            <input id="to" type="date" class="form-control form-margin-bottom" name="sight_visit_date" value="{{ old('sight_visit_date') }}">
                            @error('sight_visit_date')
                                <span class="input-error">{{$message}}</span>
                            @enderror
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
