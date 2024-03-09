@extends('admin.layouts.master')

@section('title','Admin | Reservation')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hotel Reservation</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Hotel Reservation
                </h4>
                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                <a href="{{ route('reservation.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
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
                            <th class="align-text-top">Hotel Name</th>
                            <th class="align-text-top">Tour Leader Tour</th>
                            <th class="align-text-top">From Date</th>
                            <th class="align-text-top">To Date</th>
                            <th class="align-text-top">Reservation Date</th>
                            @if (auth()->user()->type=='OP' || auth()->user()->type=='Admin' || auth()->user()->type=='Hotel' || auth()->user()->type=='Leader')
                            <th class="align-text-top">Total Passengers</th>
                            <th class="align-text-top">Total Single Room</th>
                            <th class="align-text-top">Total Doubles Room</th>
                            <th class="align-text-top">Total Triple Room</th>
                            @if (auth()->user()->type=='Admin' || auth()->user()->type=='Hotel')
                            <th class="align-text-top">Confirmation Date</th>
                            <th class="text-center">Action</th>
                            @endif
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($reservations as $reservation)
                            <tr>
                                <td>{{ isset($reservation->hotel->hotel_name) ? $reservation->hotel->hotel_name : '-' }}</td>
                                <td>{{ isset($reservation->tour->tour_name) ? $reservation->tour->tour_name : '-' }}</td>
                                <td>{{ date_format(date_create($reservation->from_date), 'd M Y') }}</td>
                                <td>{{ date_format(date_create($reservation->to_date), 'd M Y') }}</td>
                                <td>{{ date_format(date_create($reservation->reservation_date), 'd M Y') }}</td>
                                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin' || auth()->user()->type=='Hotel' || auth()->user()->type=='Leader')
                                <td>{{ $reservation->total_passenger }}</td>
                                <td>{{ $reservation->single_room }}</td>
                                <td>{{ $reservation->double_room }}</td>
                                <td>{{ $reservation->triple_room }}</td>
                                @if (auth()->user()->type=='Admin' || auth()->user()->type=='Hotel')
                                
                                <td>{{ isset($reservation->confirmation_date) ? date_format(date_create($reservation->confirmation_date), 'd M Y'):'' }}</td>

                                @if (auth()->user()->type=='Admin')
                                    <td class="text-center">
                                        <a class="btn btn-success btn-sm" href="{{ route('reservation.edit',$reservation->id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form class="deleteform d-inline-block" action="{{route('reservation.destroy',$reservation->id)}}" method="post">
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

                                @if (auth()->user()->type=='Hotel')

                                @if (!isset($reservation->confirmation_date))
                                <td class="text-center">
                                    <form class="deleteform d-inline-block" action="{{route('confirm',$reservation->id)}}" method="post">
                                    @csrf
                                        <button type="submit" class="btn btn-success btn-sm mb-1">
                                            <span class="btn-label">
                                            <i class="fas fa-check-circle"></i> Confirm
                                            </span>
                                        </button>
                                    </form>
                                </td>

                                @else 
                                    <td></td>
                                @endif

                                @endif

                                @endif
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