@extends('admin.layouts.master')

@section('title','Brochure')

@section('styles')
    <link href="{{ asset('/')}}admin/css/croppie.css" rel="stylesheet"/>
@endsection

@section('content')

<div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Brochure</li>
            </ol>
        </nav>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Brochure
                </h4>             
                    <a href="{{ route('generate_brochure.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Create Brochure</a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm js-dt" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>                           
                                <th class="align-text-top">Leader name</th>
                                <th class="align-text-top">Departure city</th>
                                <th class="align-text-top">Tour cost</th>
                                <th class="align-text-top">Departure date</th>
                                <th class="align-text-top">Return date</th>
                                <th class="align-text-top">Invitation</th>
                                <th class="align-text-top">Action</th>
                            </tr>
                        </thead>
                        <tbody>
						@foreach($brochures as $brochure)
                            <tr>
                                <td>{{ isset($brochure->tleader)?$brochure->tleader->tlfirst_n." ".$brochure->tleader->ti_l_name :"-"}}</td>
                                <td>{{$brochure->departure_city}}</td>
                                <td>{{$brochure->tour_cost}} $</td>
                                <td>{{ date_format(date_create($brochure->departure_date), 'd M Y') }}</td>
                                <td>{{ date_format(date_create($brochure->arrival_date), 'd M Y')}}</td>
                                <td>{{$brochure->invitation}}</td>
                                <td class="text-center">

                                    <a class="btn btn-success btn-sm" href="{{ route('generate_brochure.edit',$brochure->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a target="_blank" class="btn btn-sm" style="background: #49f;" href="{{ route('generate_brochure.show',$brochure->id) }}" onmouseover="this.style.background = '#27e' " onmouseleave="this.style.background = '#49f' ">
                                        <i class="fas fa-eye" style="color: #fff;" ></i>
                                    </a>

                                    <form class="deleteform d-inline-block" action="{{route('generate_brochure.destroy',$brochure->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger deletebtn">
                                            <span class="btn-label">
                                              <i class="fas fa-trash"></i>
                                            </span>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                      	@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection