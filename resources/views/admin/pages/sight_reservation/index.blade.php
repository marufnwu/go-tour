@extends('admin.layouts.master')

@section('title','Admin | Sight Reservation')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading --> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sight Reservation</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Sight Reservation
                </h4>
                <a href="{{ route('sight_reservation.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Add Sight Reservation <i class="fas fa-arrow-square-right    "></i> </a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                        <tr>
                            {{-- <th class="text-center">#</th> --}}
                            <th class="align-text-top">Sight Reservation</th>
                            <th class="align-text-top">Sight Name</th>
                            <th class="align-text-top">Tour Leader Tour</th>
                            <th class="align-text-top">Reservation Date</th>
                            <th class="align-text-top">Confirmation Date</th>
                            <th class="align-text-top">Sight Visit Day</th>
                            @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                            <th class="align-text-top">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sightreservations as $sightreservation)
                            <tr>
                                <td>{{ $sightreservation->sight_reservation }}</td>
                                <td>{{ isset($sightreservation->sight->sight_name) ? $sightreservation->sight->sight_name : '-' }}</td>
                                <td>{{ isset($sightreservation->tour->tour_name) ? $sightreservation->tour->tour_name : '-' }}</td>
                                <td>{{ date_format(date_create($sightreservation->reservation_date), 'd M Y') }}</td>
                                <td>{{ date_format(date_create($sightreservation->confirmation_date), 'd M Y') }}</td>
                                <td>{{ date_format(date_create($sightreservation->sight_visit_date), 'd M Y') }}</td>
                                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                                <td class="text-center">
                                    <a class="btn btn-success btn-sm mb-1" href="{{ route('sight_reservation.edit',$sightreservation->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form class="deleteform d-inline-block" action="{{route('sight_reservation.destroy',$sightreservation->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger deletebtn mb-1">
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
    <!-- /.container-fluid -->

@endsection


@section('scripts')

@endsection
