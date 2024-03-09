@extends('admin.layouts.master')

@section('title','Admin | Manage Tour Leader')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tour Info</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Tour Booking Information
                </h4>
                {{--<a href="{{ route('tour_booking.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Book a Tour </a>--}}
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                        <tr>
                            {{-- <th class="text-center">#</th> --}}
                            <th class="align-text-top">Tour Program</th>
                            <th class="align-text-top">Deparature Date</th>
                            <th class="align-text-top">Language</th>  
                            <th class="align-text-top">Group Size</th>
                            <th class="align-text-top">Price</th>
                            
                            {{--<th class="align-text-top">Action</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($tours as $tour)
                            <tr>
                                <td>{{ $tour->tour_name }}</td>
                                <td>{{ date_format(date_create($tour->athens_departure_date), 'd M Y') }}</td>
                                <td>{{ isset($tour) ? $tour->language : '-' }}</td>
                                <td>{{ $tour->passengers }} passengers</td>
                                <td>${{ $tour->tour_cost }}</td>
                                {{--<td class="text-center">
                                    <a class="btn btn-success btn-sm" href="{{ route('tour_booking.edit',$booking->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form class="deleteform d-inline-block" action="{{route('tour_booking.destroy',$booking->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger deletebtn">
                                            <span class="btn-label">
                                              <i class="fas fa-trash"></i>
                                            </span>
                                        </button>
                                    </form>

                                </td>--}}
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
