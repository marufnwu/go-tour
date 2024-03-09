@extends('admin.layouts.master')

@section('title','Admin | Passenger Ticket Information')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Passenger Ticket Information</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Passenger Ticket Information
                </h4>
                <a href="{{ route('passenger.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Add Passenger Information</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm js-dt" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="align-text-top">Image</th>
                            <th class="align-text-top">First Name</th>
                            <th class="align-text-top">Middle Name</th>
                            <th class="align-text-top">Last Name</th>
                            <th class="align-text-top">Citizenship</th>
                            <th class="align-text-top">Date of Birth</th>
                            <th class="align-text-top">Phone</th>
                            <th class="align-text-top">Email</th>
                            <th class="align-text-top">Tour Code</th>
                            <th class="align-text-top">Tour Leader Tour</th>
                            <th class="align-text-top">Supplement Cost</th>
                            <th class="align-text-top">Departure City</th>
                            <th class="align-text-top">Payment Type</th>
                            <th class="align-text-top">Accomodation Type</th>
                            <th class="align-text-top">Sharing Room With</th>
                            <th class="align-text-top">Special Request</th>
                            @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                            <th class="align-text-top">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($passengers as $passenger)
                        {{-- @dd($passenger->special_request) --}}
                            <tr>
                                <td>
                                    <img src="{{ asset('/uploads'.$passenger->image) }}" height="60" class="rounded" alt="Image Here">
                                </td>
                                <td>{{ $passenger->first_name }}</td>
                                <td>{{ $passenger->middle_name }}</td>
                                <td>{{ $passenger->last_name }}</td>
                                <td>{{ $passenger->citizenship_country }}</td>
                                <td>{{ date_format(date_create($passenger->date_of_birth), 'd M Y h:i A') }}</td>
                                <td>{{ $passenger->phone_number }}</td>
                                <td>{{ $passenger->email }}</td>
                                <td>{{ $passenger->tour_code }}</td>
                                <td>{{ isset($passenger->tour->tour_name) ? $passenger->tour->tour_name : '-' }}</td>
                                <td>{{ $passenger->supplement_cost }}</td>
                                <td>{{ isset($passenger->airport->airport_name) ? $passenger->airport->airport_name : '-' }}</td>
                                <td>{{ isset($passenger->payment->payment_method) ? $passenger->payment->payment_method : '-' }}</td>
                                <td>{{ isset($passenger->accom->accommodation_type_name) ? $passenger->accom->accommodation_type_name : '-' }}</td>
                                <td>{{ @$passenger->first_name.' '.@$passenger->last_name }}</td>
                                <td>{{ @$passenger->special_request->special_request }}</td>
                                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                                <td class="text-center">

                                    <a class="btn btn-success btn-sm" href="{{ route('passenger.edit',$passenger->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form class="deleteform d-inline-block" action="{{route('passenger.destroy',$passenger->id)}}" method="post">
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