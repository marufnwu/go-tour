@extends('admin.layouts.master')

@section('title','Admin | Manage Sight')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Sight</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Manage Sight
                </h4>
                <a href="{{ route('sight_list.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Add Sight <i class="fas fa-arrow-square-right"></i> </a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm js-dt" id="dataTable">
                        <thead>
                        <tr>
                            {{-- <th class="text-center">#</th> --}}
                            <th class="align-text-top">Sight Name</th>
                            <th class="align-text-top">Location</th>
                            <th class="align-text-top">Description</th>
                            <th class="align-text-top">Entrance Fees</th>
                            <th class="align-text-top">National Pass</th>
                            <th class="align-text-top">Email</th>
                            <th class="align-text-top">Phone</th>
                            @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                            <th class="align-text-top">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($sights as $sight)
                            <tr>
                                <td>{{ $sight->sight_name }}</td>
                                <td>{{ isset($sight->cntry->country_name) ? $sight->cntry->country_name : '-' }}, {{ isset($sight->cty->city_name) ? $sight->cty->city_name : '-' }}</td>
                                <td>{{ $sight->sights_description }}</td>
                                <td>{{ $sight->sight_entrance_fees }}</td>
                                <td>{{ $sight->sight_national_pass }}</td>
                                <td>{{ $sight->sight_email }}</td>
                                <td>{{ $sight->sight_phone_number }}</td>
                                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                                <td class="text-center">

                                    <a class="btn btn-success btn-sm mb-1" href="{{ route('sight_list.edit',$sight->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form class="deleteform d-inline-block" action="{{route('sight_list.destroy',$sight->id)}}" method="post">
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
