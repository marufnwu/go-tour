@extends('admin.layouts.master')

@section('title', isset($destinationCategory) ? 'Admin | Edit Destination Category' : 'Admin | Add Destination Category')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('tour.index') }}">Manage Tour</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ isset($destinationCategory) ? 'Edit' : 'Add' }} Destination Category</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> {{ isset($destinationCategory) ? 'Edit' : 'Add' }} Destination Category
                </h4>
            </div>
            <form id="ajaxForm" class="" action="{{ isset($destinationCategory) ? route('destination-category.update', $destinationCategory->id) : route('destination-category.store') }}" method="POST">
                @csrf
                @if(isset($destinationCategory))
                    @method('PUT')
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <x-generic-form-input label="Category Name" name="name" type="text"
                                placeholder="Category name..." required="true" id="category-name-input"
                                value="{{ old('name', $destinationCategory->name ?? '') }}" />
                        </div>

                        <div class="col-lg-4">
                            <x-slug-form-input label="Slug" name="slug" placeholder="Enter slug..." required="true"
                                id="slug-input" class="form-control slug-input" slugFrom="name"
                                value="{{ old('slug', $destinationCategory->slug ?? '') }}" />
                        </div>

                        <div class="col-lg-4">
                            <x-generic-dropdown label="Status" name="is_active" :options="[
                                '1' => 'Enabled',
                                '0' => 'Disabled',
                            ]" required="true"
                                selected="{{ old('is_active', $destinationCategory->is_active ?? '1') }}" />
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-3 col-12"></div>

                            <x-generic-button type="submit" class="btn btn-primary btn-lg btn-block" id="submitBtn"
                                icon="fa fa-check-circle" text="{{ isset($destinationCategory) ? 'Update' : 'Save' }}" />

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection


@section('scripts')
    <script src="{{ asset('/') }}admin/js/croppie.js"></script>
    <script>
        // Your image upload logic can remain the same
    </script>
@endsection
