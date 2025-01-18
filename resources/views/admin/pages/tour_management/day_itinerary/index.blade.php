@extends('admin.layouts.master')

@section('title','Admin | Day Itinerary')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Day Itinerary</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Day Itinerary
                </h4>
                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin' || auth()->user()->type=='OP')
                <a href="{{ route('itinerary.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Add Day Itinerary</a>
                @endif
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm js-dt" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="align-text-top text-center">Day Itinerary</th>
                            <th class="align-text-top text-center">Position</th>
                            <th class="align-text-top text-center">General Tour Itinerary</th>
                            <th class="align-text-top text-center">Location</th>
                            <th class="align-text-top text-center">Activity</th>
                            <th class="align-text-top text-center">Sight</th>
                            <th class="align-text-top text-center">Sight Distance</th>
                            <th class="align-text-top text-center">Airport</th>
                            @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                            <th class="align-text-top">Action</th>
                            @endif

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($itineraries as $itinerary)
                            <tr>
                                <td class="text-center">{{ $itinerary->day_itinerary }}</td>
                                <td class="text-center">{{ $itinerary->position ? $itinerary->position:'-'}}</td>
                                <td class="text-center">{{ isset($itinerary->gti->gti_name) ? $itinerary->gti->gti_name : '-' }}</td>
                                <td class="text-center">{{ isset($itinerary->cty->city_name) ? $itinerary->cty->city_name : '-' }}, {{ isset($itinerary->cntry->country_name) ? $itinerary->cntry->country_name : '-' }}</td>
                                <td class="text-center">{{ isset($itinerary->act->activity_name) ? $itinerary->act->activity_name : '-' }}</td>
                                <td class="text-center">{{ isset($itinerary->sight->sight_name) ? $itinerary->sight->sight_name : '-' }}</td>
                                <td class="text-center">{{ isset($itinerary->dis->distant_sight_name) ? $itinerary->dis->distant_sight_name : '-' }}</td>
                                <td class="text-center">{{ isset($itinerary->air->airport_name) ? $itinerary->air->airport_name : '-' }}</td>
                                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                                <td class="text-center">
                                    <a class="btn btn-success btn-sm" href="{{ route('itinerary.edit',$itinerary->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form class="deleteform d-inline-block" action="{{route('itinerary.destroy',$itinerary->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger deletebtn">
                                            <span class="btn-label">
                                              <i class="fas fa-trash"></i>
                                            </span>
                                        </button>
                                    </form>

                                </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

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
                $('#uploaded_image').html('<img src="'+e.target.result+'" class="rounded mb-3" style="width:100px; height:100px" />');
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
                    $('#uploaded_image').html('<img src="'+response+'" class="rounded mb-3" />');
                })
        });

        // Image Upload

    </script>
@endsection