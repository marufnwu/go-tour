@extends('admin.layouts.master')

@section('title','General Tour Itinerary | Edit')

@section('styles')
    <link href="{{ asset('/')}}admin/css/croppie.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('gti.index') }}">General Tour Itinerary</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit General Tour Itinerary</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <i class="fas fa fa-desktop"></i> Edit General Tour Itinerary
                </h6>
            </div>
            <form id="ajaxForm" class="" action="{{route('gti.update',$gtis->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Name<span class="text-danger">*</span></label>
                                <input id="from" type="text" class="form-control form-margin-bottom" name="gti_name" value="{{$gtis->gti_name}}"  placeholder="GTI name...">
                                @error('gti_name')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">GTI Total Days<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="gti_total_days" value="{{$gtis->gti_total_days}}"  placeholder="GTI total days...">
                                @error('gti_total_days')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">hotel stay days<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="hotel_days" value="{{$gtis->hotel_days}}"  placeholder="Number of days...">
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
                                <input type="radio" onclick="hide()" {{ $gtis->includes_flight  == 1 ? 'checked' : '' }} id="includes-flight-1" name="includes_flight" value="1" />
                                <label for="includes-flight-1" style="margin-right: 1rem;">Yes</label>
                                <input type="radio" onclick="hide()" {{ $gtis->includes_flight  == 2 ? 'checked' : '' }} id="includes-flight-2" name="includes_flight" value="2" />
                                <label for="includes-flight-2">No</label>
                            </div>
                        </div>
                                @error('includes_flight')
                                    <span class="input-error" id="flight-error">{{$message}}</span>
                                @enderror
                        <div class="col-lg-3 flights" style="display: none;">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">First City flight<span class="text-danger">*</span></label>
                                <input id="" type="text" class="form-control form-margin-bottom" name="first_flight" value="{{$gtis->first_flight}}"  placeholder="First flight...">
                                @error('first_flight')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 flights" style="display: none;">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Second City flight<span class="text-danger">*</span></label>
                                <input id="" type="text" class="form-control form-margin-bottom" name="second_flight" value="{{$gtis->second_flight}}"  placeholder="second flight...">
                                @error('second_flight')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 flights" style="display: none;">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Third City flight<span class="text-danger">*</span></label>
                                <input id="" type="text" class="form-control form-margin-bottom" name="third_flight" value="{{$gtis->third_flight}}"  placeholder="third flight...">
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
                                <input type="radio" id="starts-1" name="hotel_stars" value="1" {{ $gtis->hotel_stars  == 1 ? 'checked' : '' }} id="includes-flight-1" name="includes_flight" value="1"/>
                                <label for="starts-1" style="margin-right: 1rem;">1 star</label>
                                <br>
                                <input type="radio" id="starts-2" name="hotel_stars" value="2" {{ $gtis->hotel_stars  == 2 ? 'checked' : '' }} id="includes-flight-1" name="includes_flight" value="1"/>
                                <label for="starts-2">2 stars</label>
                                <br>
                                <input type="radio" id="starts-3" name="hotel_stars" value="3" {{ $gtis->hotel_stars  == 3 ? 'checked' : '' }} id="includes-flight-1" name="includes_flight" value="1"/>
                                <label for="starts-3" style="margin-right: 1rem;">3 stars</label>
                                <br>
                                <input type="radio" id="starts-4" name="hotel_stars" value="4" {{ $gtis->hotel_stars  == 4 ? 'checked' : '' }} id="includes-flight-1" name="includes_flight" value="1"/>
                                <label for="starts-4">4 stars</label>
                                <br>
                                <input type="radio" id="starts-5" name="hotel_stars" value="5" {{ $gtis->hotel_stars  == 5 ? 'checked' : '' }} id="includes-flight-1" name="includes_flight" value="1"/>
                                <label for="starts-5">5 stars</label>
                               
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Meals included</p>
                            <div class="form-group">
                                <input type="radio" id="meals-1" name="meals" value="breakfast" {{ $gtis->meals  == 'breakfast' ? 'checked' : '' }}/>
                                <label for="meals-1" style="margin-right: 1rem;">Breakfast</label>
                                <br>
                                <input type="radio" id="meals-2" name="meals" value="breakfast and lunch" {{ $gtis->meals  == 'breakfast and lunch' ? 'checked' : '' }}/>
                                <label for="meals-2">Breakfast and lunch</label>
                                <br>
                                <input type="radio" id="meals-3" name="meals" value="breakfast, lunch and dinner" {{ $gtis->meals  == 'breakfast, lunch and dinner' ? 'checked' : '' }}/>
                                <label for="meals-3" style="margin-right: 1rem;">Breakfast, lunch and dinner</label>
                                <br>
                                <input type="radio" id="meals-4" name="meals" value="breakfast and dinner" {{ $gtis->meals  == 'breakfast and dinner' ? 'checked' : '' }}/>
                                <label for="meals-4" style="margin-right: 1rem;">Breakfast and dinner</label>
                                <br>
                                <input type="radio" id="meals-5" name="meals" value="no meal" {{ $gtis->meals  == 'no meal' ? 'checked' : '' }}/>
                                <label for="meals-5">No meal included</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <p class="font-weight-bold">Includes Guide</p>
                            <div class="form-group">
                                <input type="radio" id="includes-guide-1" name="include_guide" value="1" {{ $gtis->include_guide  == '1' ? 'checked' : '' }}/>
                                <label for="includes-guide-1" style="margin-right: 1rem;">Yes</label>
                                <br>
                                <input type="radio" id="includes-guide-2" name="include_guide" value="2" {{ $gtis->include_guide  == '2' ? 'checked' : '' }}/>
                                <label for="includes-guide-2">No</label>
                                <br>
                                <input type="radio" id="includes-guide-3" name="include_guide" value="3" {{ $gtis->include_guide  == '3' ? 'checked' : '' }}/>
                                <label for="includes-guide-3">mixed</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <p class="font-weight-bold">Includes Sight entrance</p>
                            <div class="form-group">
                                <input type="radio" id="includes-sight-1" name="includes_sight" value="1" {{ $gtis->includes_sight  == '1' ? 'checked' : '' }}/>
                                <label for="includes-sight-1" style="margin-right: 1rem;">Yes</label>
                                <br>
                                <input type="radio" id="includes-sight-2" name="includes_sight" value="2" {{ $gtis->includes_sight  == '2' ? 'checked' : '' }}/>
                                <label for="includes-sight-2">No</label>
                                <br>
                                <input type="radio" id="includes-sight-3" name="includes_sight" value="3" {{ $gtis->includes_sight  == '3' ? 'checked' : '' }}/>
                                <label for="includes-sight-3">mixed</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <p class="font-weight-bold">Includes Transport</p>
                            <div class="form-group">
                                <input type="radio" id="includes-transport-1" name="includes_transport" value="1" {{ $gtis->includes_transport  == '1' ? 'checked' : '' }}/>
                                <label for="includes-transport-1" style="margin-right: 1rem;">Yes</label>
                                <br>
                                <input type="radio" id="includes-transport-2" name="includes_transport" value="2" {{ $gtis->includes_transport  == '2' ? 'checked' : '' }}/>
                                <label for="includes-transport-2">No</label>
                                <br>
                                <input type="radio" id="includes-transport-3" name="includes_transport" value="3" {{ $gtis->includes_transport  == '3' ? 'checked' : '' }}/>
                                <label for="includes-transport-3">mixed</label>
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

        const firstSelect = document.getElementById('includes-flight-1');
        const secondSelect = document.getElementById('includes-flight-2');
        const flightsContainers = document.querySelectorAll('.flights');

        if (firstSelect.checked) {
            for (var i = 0; i < flightsContainers.length; i++) {
                flightsContainers[i].style.display = 'inherit';
                console.log(flightsContainers[i])
            }
        }

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
        let error = document.getElementById('flight-error');

        const hide = () => {
            error.style.display = 'none';
        }
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