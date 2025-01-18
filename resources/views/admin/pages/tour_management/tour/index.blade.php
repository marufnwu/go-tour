@extends('admin.layouts.master')

@section('title','Admin | Manage Destination')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Tours</li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Manage Tours
                </h4>
                <a href="{{ route('tour.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Add Tour </a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                @include("admin.pages.tour_management.tour.table", ["items"=>$tours])
            </div>
        </div>
    </div>

@endsection
