@extends('admin.layouts.master')

@section('title','Admin | Media Assign to Sight')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading --> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Media Assign to Sight</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> Media Assign to Sight
                </h4>
                <a href="{{ route('assign_media.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm btn-rounded" >
                    <i class="fa fa-plus"></i>&nbsp; Assign Media <i class="fas fa-arrow-square-right"></i> </a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                        <tr>
                            {{-- <th class="text-center">#</th> --}}
                            <th class="align-text-top">Sight Name</th>
                            <th class="align-text-top">Media Type</th>
                            <th class="align-text-top">Media Link</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($medias as $media)
                            <tr>
                                <td>{{ isset($media->sight->sight_name) ? $media->sight->sight_name : '-' }}</td>
                                <td>{{ isset($media->type->media_type_name) ? $media->type->media_type_name : '-' }}</td>
                                <td>{{ $media->media_link }}</td>

                                <td class="text-center">

                                    <a class="btn btn-success btn-sm mb-1" href="{{ route('assign_media.edit',$media->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form class="deleteform d-inline-block" action="{{route('assign_media.destroy',$media->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger deletebtn mb-1">
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
    <!-- /.container-fluid -->

@endsection


@section('scripts')

@endsection
