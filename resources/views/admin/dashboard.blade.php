@extends('admin.layouts.master')
@section('title', $user.' | Dashboard')

@section('content')

    <div class="container-fluid">
        <div class="dashboard-container">
            <h4 class="breadcrumb-item">Dashboard</h4>
        </div>
@if(auth()->user()->type=='Admin')
        <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class=" font-weight-bold text-primary text-uppercase mb-2">Tour Leaders</div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">{{ sizeof($tourleaders)}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa fa-female fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class=" font-weight-bold text-success text-uppercase mb-2">
                                    Hotels
                                </div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">{{ sizeof($hotels) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-headphones fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-info text-uppercase mb-2">
                                    Airlines
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h4 mb-0 mr-3 font-weight-bold text-gray-800">{{ sizeof($airlines) }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-user-tie fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class=" font-weight-bold text-warning text-uppercase mb-2">
                                    Passengers
                                </div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">
                                   {{ sizeof($passengers) }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-user-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
@endif  
@endsection