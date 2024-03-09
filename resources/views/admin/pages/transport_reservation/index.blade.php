@extends('admin.layouts.master')

@section('title','Admin | Reservation')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Transport Reservation</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Transport Reservation
                </h4>
                @if (auth()->user()->type=='Admin' || auth()->user()->type=='OP')
                <a href="{{ route('reservetransport.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Add Reservation</a>
                @endif
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm js-dt" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            @if (auth()->user()->type=='Admin' || auth()->user()->type=='OP')
                                <th class="align-text-top">Supplier</th>
                            @endif
                            <th class="align-text-top">Tour Leader Tour</th>
                            <th class="align-text-top">Tour Code</th>
                            <th class="align-text-top">Cost</th>
                            <th class="align-text-top">Date of Service</th>
                            <th class="align-text-top">Confirmation Date</th>
                            <th class="align-text-top">Confirmation Price</th>
                            <th class="align-text-top">Transport type</th>
                            @if (auth()->user()->type=='BC' || auth()->user()->type=='Admin')
                            <th class="text-center">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($reservations as $reservation)
                            <tr>
                                @if (auth()->user()->type=='Admin' || auth()->user()->type=='OP')
                                    <td>{{ @$reservation->supply->s_first_name .' '. @$reservation->supply->s_last_name }}</td>
                                @endif
                                <td>{{ @$reservation->tour->tour_name }}</td>
                                <td>{{ $reservation->tour_code }}</td>
                                <td>{{ $reservation->transport_cost }} $</td>
                                <td>{{ date_format(date_create($reservation->service_date), 'd M Y h:i A') }}</td>
                                @if (isset($reservation->confirm_date))
                                    <td>{{ date_format(date_create($reservation->confirm_date), 'd M Y h:i A') }}</td>
                                @else
                                    <td>{{ @$reservation->confirm_date }}</td>
                                @endif
                                <td>{{ @$reservation->confirm_price }} $</td>
                                <td>{{ @$reservation->trasnportType->type_name }}</td>
                                @if ( auth()->user()->type=='Admin' || auth()->user()->type=='BC')
                                <td class="text-center">
                                    <a class="btn btn-success btn-sm" href="{{ route('reservetransport.edit',$reservation->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @if ( auth()->user()->type=='Admin')
                                    <form class="deleteform d-inline-block" action="{{route('reservetransport.destroy',$reservation->id)}}" method="post">
                                        @csrf

                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger deletebtn">
                                            <span class="btn-label">
                                              <i class="fas fa-trash"></i>
                                            </span>
                                        </button>
                                    </form>
                                    
                                    @endif
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