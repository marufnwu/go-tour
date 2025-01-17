@extends('admin.layouts.master')

@section('title', isset($destination) ? 'Admin | Edit Destination' : 'Admin | Add Destination')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('destination.index') }}">Manage Destination</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ isset($destination) ? 'Edit' : 'Add' }} Destination
                    Category</li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle"></i> {{ isset($destination) ? 'Edit' : 'Add' }} Destination Category
                </h4>
            </div>
            <form id="ajaxForm" class=""
                action="{{ isset($destination) ? route('destination.update', $destination->id) : route('destination.store') }}"
                method="POST">
                @csrf
                @if (isset($destination))
                    @method('PUT')
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <x-generic-form-input label="Destination Name" name="name" type="text"
                                placeholder="Category name..." required="true" id="category-name-input"
                                value="{{ old('name', $destination->name ?? '') }}" />
                        </div>

                        <div class="col-lg-4">
                            <x-generic-form-input label="Description" name="description" type="text"
                                placeholder="Description..." required="true" id="category-name-input"
                                value="{{ old('description', $destination->description ?? '') }}" />
                        </div>

                        <div class="col-lg-4">
                            <x-generic-dropdown label="Destination Category" name="destination_category_id" :options="$categories->pluck('name', 'id')->toArray()" required="true"
                                selected="{{ old('destination_category_id', $destination->destination_category_id ?? '') }}" />
                        </div>

                    </div>


                    <div class="row">



                        <div class="col-lg-4">
                            <x-generic-dropdown label="Status" name="is_active" :options="[
                                '1' => 'Enabled',
                                '0' => 'Disabled',
                            ]" required="true"
                                selected="{{ old('is_active', $destination->is_active ?? '1') }}" />
                        </div>

                        <div class="col-lg-4">
                            <x-slug-form-input label="Slug" name="slug" placeholder="Enter slug..." required="true"
                                id="slug-input" class="form-control slug-input" slugFrom="name"
                                value="{{ old('slug', $destination->slug ?? '') }}" />
                        </div>


                    </div>

                </div>

                <div class="modal-footer">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-3 col-12"></div>

                            <x-generic-button type="submit" class="btn btn-primary btn-lg btn-block" id="submitBtn"
                                icon="fa fa-check-circle" text="{{ isset($destination) ? 'Update' : 'Save' }}" />

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
