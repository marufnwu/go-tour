@extends('admin.layouts.master')

@section('title','Admin | Manage Tour Leader')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Tour Leader</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Tour Leader Information
                </h4>
                <a href="{{ route('tourleaders.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Add Tour Leader </a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                        <tr>
                            <th class="align-text-top">Image</th>
                            <th class="align-text-top">Name</th>
                            <th class="align-text-top">Address</th>
                            <th class="align-text-top">City</th>
                            <th class="align-text-top">State</th>
                            <th class="align-text-top">Zip</th>
                            <th class="align-text-top">Phone</th>
                            <th class="align-text-top">Email</th>
                            <th class="align-text-top">Church Name</th>
                            <th class="align-text-top">Church Denomination</th>
                            <th class="align-text-top">Church Members</th>
                            <th class="align-text-top">Church Phone</th>
                            <th class="align-text-top">Church Email</th>
                            @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                            <th class="align-text-top">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($tourleaders as $tourleader)
                            <tr>
                                <td>
                                    <img src="{{ asset('/uploads/leader-profile/'.$tourleader->image) }}" height="60" class="rounded" alt="Profile image">
                                </td>
                                <td>{{ $tourleader->tlfirst_n }} {{ $tourleader->tl_m_name }} {{ $tourleader->ti_l_name }}</td>
                                <td>{{ $tourleader->address }}</td>
                                <td>{{ $tourleader->city }}</td>
                                <td>{{ $tourleader->state }}</td>
                                <td>{{ $tourleader->zip }}</td>
                                <td>{{ $tourleader->th_phone }}</td>
                                <td>{{ $tourleader->th_email }}</td>
                                <td>{{ $tourleader->church_name }}</td>
                                <td>{{ $tourleader->church_denomination }}</td>
                                <td>{{ $tourleader->church_members }}</td>
                                <td>{{ $tourleader->church_phone }}</td>
                                <td>{{ $tourleader->church_email }}</td>
                                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                                <td class="text-center">

                                    <a class="btn btn-success btn-sm mb-1" href="{{ route('tourleaders.edit',$tourleader->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form class="deleteform d-inline-block" action="{{route('tourleaders.destroy',$tourleader->id)}}" method="post">
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
