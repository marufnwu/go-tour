@extends('admin.layouts.master')

@section('title','Admin | Financial Report')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        {{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Activity</li>
            </ol>
        </nav> --}}


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Financial Report
                </h4>
                {{-- <a href="{{ route('activity.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Add Activity </a> --}}
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm js-dt" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            @if (auth()->user()->type=='Admin' || auth()->user()->type=='Leader')
                            <th>Passenger Name</th>
                            @endif
                            <th>Total Payment</th>
                            <th>Payment Date</th>
                            {{-- <th class="text-center">Action</th> --}}
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($reports as $report)
                            <tr>
                                @if (auth()->user()->type=='Admin' || auth()->user()->type=='Leader')
                                <td>{{ @$report->pass->first_name.' '.@$report->pass->last_name }}</td>
                                @endif
                                <td>$ {{ $report->amount }}</td>
                                <td>{{ date_format(date_create($report->payment_date), 'd M Y') }}</td>
                                {{-- <td class="text-center">

                                    <a class="btn btn-success btn-sm" href="{{ route('activity.edit',$report->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form class="deleteform d-inline-block" action="{{route('activity.destroy',$report->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger deletebtn">
                                            <span class="btn-label">
                                              <i class="fas fa-trash"></i>
                                            </span>
                                        </button>
                                    </form>

                                </td> --}}
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