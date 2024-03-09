@extends('admin.layouts.master')

@section('title','Admin | Tour Leader Tour')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tour Leader Tour</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Tour Leader Tour
                </h4>
                <a href="{{ route('tourleader_tour.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Add Tour Leader Tour <i class="fas fa-arrow-square-right"></i> </a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                        <tr>
                            <th class="align-text-top">Tour Leader Name</th>
                            <th class="align-text-top">General Tour Itinerary</th>
                            <th class="align-text-top">Passengers</th>
                            <th class="align-text-top">Tour Name</th>
                            <th class="align-text-top">Departure Date</th>
                            <th class="align-text-top">Tour Cost</th>
                            <th class="align-text-top">Language</th>
                            <th class="align-text-top">Tour Code</th>
                            @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                            <th class="align-text-top">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($tours as $tour)
                            <tr>
                                <td> {{ @$tour->tleader->tlfirst_n.' '. @$tour->tleader->ti_l_name }}</td>
                                <td>{{ isset($tour->gti->gti_name) ? $tour->gti->gti_name : '-' }}</td>
                                <td>{{ $tour->passengers }}</td>
                                <td>{{ $tour->tour_name }}</td>
                                <td>{{ date_format(date_create($tour->athens_departure_date), 'd M Y h:i A') }}</td>
                                <td>{{ $tour->tour_cost }}$</td>
                                <td>{{ $tour->language }}</td>
                                <td>{{ $tour->tour_code }}</td>
                                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                                <td class="text-center">

                                    <a class="btn btn-success btn-sm mb-1" href="{{ route('tourleader_tour.edit',$tour->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form class="deleteform d-inline-block" action="{{route('tourleader_tour.destroy',$tour->id)}}" method="post">
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
