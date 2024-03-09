@extends('admin.layouts.master')

@section('title','Admin | Passenger Payment')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Passenger Payment</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Passenger Payment
                </h4>
                @if (auth()->user()->type=='Admin' || auth()->user()->type=='OP' || auth()->user()->type=='Passenger')
                <a href="{{ route('payment_passenger.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Add Passenger Payment</a>
                @endif
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm js-dt" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="align-text-top">Date of Payment</th>
                            <th class="align-text-top">Type</th>
                            <th class="align-text-top">Tour Leader Tour</th>
                            @if(auth()->user()->type=='Admin' || auth()->user()->type=='OP' || auth()->user()->type=='Leader')
                                <th class="align-text-top">Passenger Name</th>
                            @endif
                            <th class="align-text-top">Amount</th>
                            <th class="align-text-top">Payment References</th>
                            @if(auth()->user()->type=='Admin')
                                <th class="text-center">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($payments as $payment)
                            <tr>
                                <td>{{ date_format(date_create($payment->date_of_payment), 'd M Y h:i A') }}</td>
                                <td>{{ isset($payment->method->payment_method) ? $payment->method->payment_method : '-' }}</td>
                                <td>{{ isset($payment->tour->tour_name) ? $payment->tour->tour_name : '-'  }}</td>
                                @if(auth()->user()->type=='Admin' || auth()->user()->type=='OP' || auth()->user()->type=='Leader')
                                    <td>{{ isset($payment->pass) ? $payment->pass->first_name.' '.$payment->pass->last_name : "-" }}</td>
                                @endif
                                <td>$ {{ $payment->amount }}</td>
                                <td>{{ $payment->payment_references }}</td>
                                @if(auth()->user()->type=='Admin')
                                    <td class="text-center">

                                    <a class="btn btn-success btn-sm" href="{{ route('payment_passenger.edit',$payment->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form class="deleteform d-inline-block" action="{{route('payment_passenger.destroy',$payment->id)}}" method="post">
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