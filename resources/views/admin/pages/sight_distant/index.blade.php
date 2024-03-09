@extends('admin.layouts.master')

@section('title','Admin | Sight Distant')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sight Distance</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Sight Distance
                </h4>
                <a href="{{ route('sight_distant.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Add Sight Distance <i class="fas fa-arrow-square-right    "></i> </a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered js-dt" id="dataTable">
                        <thead>
                        <tr>
                            {{-- <th class="text-center">#</th> --}}
                            <th class="align-text-top">Sight distance Name</th>
                            <th class="align-text-top">Country Name</th>
                            <th class="align-text-top">City Name</th>
                            <th class="align-text-top">First Sight</th>
                            <th class="align-text-top">Second Sight</th>
                            <th class="align-text-top">Sight Distance</th>
                            @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                            <th class="align-text-top">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($sightdistants as $sightdistant)
                            <tr>
                                <td>{{ $sightdistant->distant_sight_name }}</td>
                                <td>{{ isset($sightdistant->cntry->country_name) ? $sightdistant->cntry->country_name : '-' }}</td>
                                <td>{{ isset($sightdistant->cty->city_name) ? $sightdistant->cty->city_name : '-' }}</td>
                                <td>{{ $sightdistant->first_site }}</td>
                                <td>{{ $sightdistant->second_site }}</td>
                                <td>{{ $sightdistant->sight_distant }} min</td>
                                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                                <td class="text-center">
                                    <a class="btn btn-success btn-sm mb-1" href="{{ route('sight_distant.edit',$sightdistant->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form class="deleteform d-inline-block" action="{{route('sight_distant.destroy',$sightdistant->id)}}" method="post">
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
