@extends('admin.layouts.master')

@section('title','Admin | Add General Tour Itinerary')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('gti.index') }}">General Tour Itinerary</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add General Tour Itinerary</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Add General Tour Itinerary
                </h4>

            </div>
            <form id="ajaxForm" class="" action="{{route('gti.store')}}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="gti_name" value="{{ old('gti_name') }}"  placeholder="GTI name...">
                                @error('gti_name')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">GTI Total Days<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="gti_total_days" value="{{ old('gti_total_days') }}"  placeholder="GTI total days...">
                                @error('gti_total_days')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">hotel stay days<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="hotel_days" value="{{ old('hotel_days') }}"  placeholder="Number of days...">
                                @error('hotel_days')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-lg-3">
                            <p class="font-weight-bold">Includes flight</p>
                            <div class="form-group">
                                <input type="radio" id="includes-flight-1" name="includes_flight" value="1" checked/>
                                <label for="includes-flight-1" style="margin-right: 1rem;">Yes</label>
                                <input type="radio" id="includes-flight-2" name="includes_flight" value="2" />
                                <label for="includes-flight-2">No</label>
                            </div>
                            @error('includes_flight')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-3 flights" style="display: none;">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">First City flight<span class="text-danger">*</span></label>
                                <input id="" type="text" class="form-control form-margin-bottom" name="first_flight" value="{{ old('first_flight') }}"  placeholder="First flight...">
                                @error('first_flight')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 flights" style="display: none;">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Second City flight<span class="text-danger">*</span></label>
                                <input id="" type="text" class="form-control form-margin-bottom" name="second_flight" value="{{ old('second_flight') }}"  placeholder="second flight...">
                                @error('second_flight')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 flights" style="display: none;">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Third City flight<span class="text-danger">*</span></label>
                                <input id="" type="text" class="form-control form-margin-bottom" name="third_flight" value="{{ old('third_flight') }}"  placeholder="third flight...">
                                @error('third_flight')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-lg-2">
                            <p class="font-weight-bold">Hotel stars</p>
                            <div class="form-group">
                                <input type="radio" id="starts-1" name="hotel_stars" value="1" />
                                <label for="starts-1" style="margin-right: 1rem;">1 Star</label>
                                <br>
                                <input type="radio" id="starts-2" name="hotel_stars" value="2" />
                                <label for="starts-2">2 Stars</label>
                                <br>
                                <input type="radio" id="starts-3" name="hotel_stars" value="3" />
                                <label for="starts-3" style="margin-right: 1rem;">3 Stars</label>
                                <br>
                                <input type="radio" id="starts-4" name="hotel_stars" value="4" />
                                <label for="starts-4">4 Stars</label>
                                <br>
                                <input type="radio" id="starts-5" name="hotel_stars" value="5" />
                                <label for="starts-5">5 Stars</label>
                            </div>
                            @error('hotel_stars')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Meals included</p>
                            <div class="form-group">
                                <input type="radio" id="meals-1" name="meals" value="breakfast" />
                                <label for="meals-1" style="margin-right: 1rem;">Breakfast</label>
                                <br>
                                <input type="radio" id="meals-2" name="meals" value="breakfast and lunch" />
                                <label for="meals-2">Breakfast and lunch</label>
                                <br>
                                <input type="radio" id="meals-3" name="meals" value="breakfast, lunch and dinner" />
                                <label for="meals-3" style="margin-right: 1rem;">Breakfast, lunch and dinner</label>
                                <br>
                                <input type="radio" id="meals-4" name="meals" value="breakfast and dinner" />
                                <label for="meals-4" style="margin-right: 1rem;">Breakfast and dinner</label>
                                <br>
                                <input type="radio" id="meals-5" name="meals" value="no meal" />
                                <label for="meals-5">No meal included</label>
                            </div>
                            @error('meals')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-2">
                            <p class="font-weight-bold">Includes Guide</p>
                            <div class="form-group">
                                <input type="radio" id="includes-guide-1" name="include_guide" value="1" />
                                <label for="includes-guide-1" style="margin-right: 1rem;">Yes</label>
                                <br>
                                <input type="radio" id="includes-guide-2" name="include_guide" value="2" />
                                <label for="includes-guide-2">No</label>
                                <br>
                                <input type="radio" id="includes-guide-3" name="include_guide" value="3" />
                                <label for="includes-guide-3">mixed</label>
                            </div>
                            @error('include_guide')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-2">
                            <p class="font-weight-bold">Includes Sight entrance</p>
                            <div class="form-group">
                                <input type="radio" id="includes-sight-1" name="includes_sight" value="1" />
                                <label for="includes-sight-1" style="margin-right: 1rem;">Yes</label>
                                <br>
                                <input type="radio" id="includes-sight-2" name="includes_sight" value="2" />
                                <label for="includes-sight-2">No</label>
                                <br>
                                <input type="radio" id="includes-sight-3" name="includes_sight" value="3" />
                                <label for="includes-sight-3">mixed</label>
                            </div>
                            @error('includes_sight')
                                <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-2">
                            <p class="font-weight-bold">Includes Transport</p>
                            <div class="form-group">
                                <input type="radio" id="includes-transport-1" name="includes_transport" value="1" />
                                <label for="includes-transport-1" style="margin-right: 1rem;">Yes</label>
                                <br>
                                <input type="radio" id="includes-transport-2" name="includes_transport" value="2" />
                                <label for="includes-transport-2">No</label>
                                <br>
                                <input type="radio" id="includes-transport-3" name="includes_transport" value="3" />
                                <label for="includes-transport-3">mixed</label>
                            </div>
                            @error('includes_transport')
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
        const firstSelect = document.getElementById('includes-flight-1');
        const secondSelect = document.getElementById('includes-flight-2');
        const flightsContainers = document.querySelectorAll('.flights');

        firstSelect.addEventListener("click",()=>{
            for (var i = 0; i < flightsContainers.length; i++) {
                flightsContainers[i].style.display = 'inherit';
                console.log(flightsContainers[i])
            }
        })
        secondSelect.addEventListener("click",()=>{
            for (var i = 0; i < flightsContainers.length; i++) {
                flightsContainers[i].style.display = 'none';
            }
        })

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
