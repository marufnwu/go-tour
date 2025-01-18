@extends('admin.layouts.master')

@section('title','Day Itinerary | Edit')

@section('styles')
    <link href="{{ asset('/')}}admin/css/croppie.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('itinerary.index') }}">Day Itinerary</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Day Itinerary</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <i class="fas fa fa-desktop"></i> Edit Day Itinerary
                </h6>

            </div>
            <form id="ajaxForm" class="" action="{{route('itinerary.update',$itineraries->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">General Tour Itinerary<span class="text-danger">*</span></label>
                                <select id="gti-select" class="form-control form-margin-bottom" name="gti_id" onchange="loadActivities(this,{{$activities}}); loadDays(this,{{$gtis}})">
                                  <option value="">Select General Tour Itinerary</option>
                                  @foreach ($gtis as $gti)
                                    <option value="{{ $gti->id }}" {{ $itineraries->gti_id  == $gti->id ? 'selected' : '' }}>{{ $gti->gti_name }}</option>
                                  @endforeach
                                </select>
                                @error('gti_id')
                                    <span class="input-error">{{$message == 'The gti id field is required.' ? 'The general tour itinerary is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="gti_day" class="font-weight-bold">Day Itinerary<span class="text-danger">*</span></label>
                                <select id="gti_day" name="day_itinerary" class="form-control form-margin-bottom js_day_itinerary" onchange="loadDayActivities(this.value,{{$activities}})">
                                    @if($days)
                                        @for ($i = 1; $i <= $days; $i++)
                                            <option value="{{$i}}" {{$i == $itineraries->day_itinerary ? 'selected' :''}}>{{$i}}</option>
                                        @endfor
                                    @endif
                                </select>
                                @error('day_itinerary')
                                    <span class="input-error">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Activity<span class="text-danger">*</span></label>
                                <select id="activity-select" class="form-control form-margin-bottom" name="activity_id">
                                  <option value="">Select One</option>
                                  @foreach($activities as $activity)
                                    <option value="{{$activity->id}}" {{$itineraries->activity_id == $activity->id ? 'selected' :''}}>{{$activity->activity_name}}</option>
                                  @endforeach
                                </select>
                                @error('activity_id')
                                    <span class="input-error">{{$message == 'The activity id field is required.' ? 'The ativity is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Country name<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="country_id">
                                  <option value="">Select Country</option>
                                  @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" {{ $itineraries->country_id  == $country->id ? 'selected' : '' }}>{{ $country->country_name }}</option>
                                  @endforeach
                                </select>
                                @error('country_id')
                                    <span class="input-error">{{$message == 'The country id field is required.' ? 'The country is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">City Name<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="city_id">
                                    <option value="">Select City</option>
                                    @foreach ($cities as $city)
                                    <option value="{{ $city->id }}" {{ $itineraries->city_id  == $city->id ? 'selected' : '' }}>{{ $city->city_name }}</option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                    <span class="input-error">{{$message == 'The city id field is required.' ? 'The city name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Sight<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="sight_id">
                                  <option value="">Select One</option>
                                  @foreach ($sights as $country)
                                    <option value="{{ @$country->id }}" {{ $itineraries->sight_id  == $country->id ? 'selected' : '' }}>{{ @$country->sight_name }}</option>
                                  @endforeach
                                </select>
                                @error('sight_id')
                                    <span class="input-error">{{$message == 'The sight id field is required.' ? 'The sight is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Sight Distance<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="sight_distant_id">
                                  <option value="">Select One</option>
                                  @foreach ($distance as $distant)
                                    <option value="{{ @$distant->id }}" {{ $itineraries->sight_distant_id  == $distant->id ? 'selected' : '' }}>{{ @$distant->distant_sight_name }}</option>
                                  @endforeach
                                </select>
                                @error('sight_distant_id')
                                    <span class="input-error">{{$message == 'The sight distant id field is required.' ? 'The sight distace is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Airport<span class="text-danger">*</span></label>
                                <select class="form-control form-margin-bottom" name="airport_id">
                                  <option value="">Select One</option>
                                  @foreach ($airports as $country)
                                    <option value="{{ @$country->id }}" {{ $itineraries->airport_id  == $country->id ? 'selected' : '' }}>{{ @$country->airport_name }}</option>
                                  @endforeach
                                </select>
                                @error('airport_id')
                                    <span class="input-error">{{$message == 'The airport id field is required.' ? 'The airport name is required' : $message;}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" class="font-weight-bold">Position<span class="text-danger">*</span></label>
                                <input id="from" type="number" min="0" class="form-control form-margin-bottom" name="position" value="{{ $itineraries->position }}"  placeholder="Position...">
                                @error('position')
                                <span class="input-error">{{$message}}</span>
                                @enderror
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


        let secondSelect = document.getElementById('activity-select');
        let daySelect = document.getElementById('gti_day')

        const loadActivities = (gti,act) => {

            secondSelect.innerHTML = ''; // Clear the options
      
            const selectedValue = gti.value;
            console.log(gti)
           for (var i = 0; i < act.length; i++) {
                if (act[i].gti == selectedValue) {
                    let option = document.createElement('option');
                    option.value = act[i].id;
                    option.innerHTML = act[i].activity_name;

                    secondSelect.append(option);
                }
           }
        }

        const loadDays = (gti,act) => {

            daySelect.innerHTML = ''; // Clear the options
      
            const selectedValue = gti.value;
            let days = 0;

            for (let i = 0; i < act.length; i++) {
                if (act[i].id== selectedValue) {
                    days = act[i].gti_total_days;
                    
                    break
                }else null
            }          

            for (let i = 1; i <= days; i++) {
                let option = document.createElement('option');
                option.value = i;
                option.innerHTML = i;

                daySelect.append(option);
            }
        }

    </script>
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