@extends('admin.layouts.master')

@section('title', isset($tour) ? 'Admin | Edit Tour' : 'Admin | Add Tour')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('tour.index') }}">Manage Tours</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ isset($tour) ? 'Edit' : 'Add' }} Tour</li>
            </ol>
        </nav>

        <!-- Card for Create/Edit -->
        <div class="card shadow mb-4">


            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-map-marker-alt"></i> {{ isset($tour) ? 'Edit' : 'Add' }} Tour
                </h4>
            </div>


            <form id="ajaxForm" action="{{ isset($tour) ? route('tour.update', $tour->id) : route('tour.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($tour))
                    @method('PUT')
                @endif
                <div class="card-body">
                    <div class="row">
                        <!-- Tour Name -->
                        <div class="col-lg-4">
                            <x-generic-form-input label="Tour Name" name="name" type="text" placeholder="Tour name..."
                                required="true" value="{{ old('name', $tour->name ?? '') }}" />
                        </div>

                        <!-- Destination -->
                        <div class="col-lg-4">
                            <x-generic-dropdown label="Destination" name="destination_id" :options="$destinations->pluck('name', 'id')->toArray()" required="true"
                                selected="{{ old('destination_id', $tour->destination_id ?? '') }}" />
                        </div>

                        <!-- Duration -->
                        <div class="col-lg-4">
                            <x-generic-form-input label="Duration (Days)" name="duration" type="number"
                                placeholder="Number of days..." required="true"
                                value="{{ old('duration', $tour->duration ?? '') }}" />
                        </div>
                    </div>

                    <div class="row py-4">
                        <!-- Arrival City -->
                        <div class="col-lg-3">
                            <x-generic-dropdown label="Arrival City" name="arrival_city" :options="$cities->pluck('city_name', 'id')->toArray()"
                                selected="{{ old('arrival_city', $tour->arrival_city ?? '') }}" />
                        </div>

                        <!-- Departure City -->
                        <div class="col-lg-3">
                            <x-generic-dropdown label="Departure City" name="departure_city" :options="$cities->pluck('city_name', 'id')->toArray()"
                                selected="{{ old('departure_city', $tour->departure_city ?? '') }}" />
                        </div>

                        <!-- Price Range -->
                        <div class="col-lg-3">
                            <x-generic-form-input label="Minimum Price" name="min_price" type="number" step="0.01"
                                placeholder="Enter minimum price..."
                                value="{{ old('min_price', $tour->min_price ?? '') }}" />
                        </div>

                        <div class="col-lg-3 mt-2">
                            <x-generic-form-input label="Maximum Price" name="max_price" type="number" step="0.01"
                                placeholder="Enter maximum price..."
                                value="{{ old('max_price', $tour->max_price ?? '') }}" />
                        </div>
                    </div>


                    <div class="row py-4">
                        <!-- Travel Dates -->
                        <div class="col-lg-3">
                            <x-generic-form-input label="Travel Start Date" name="travel_strat_at" type="date"
                                value="{{ old('travel_strat_at', $tour->travel_strat_at ?? '') }}" />
                        </div>

                        <div class="col-lg-3">
                            <x-generic-form-input label="Travel End Date" name="travel_end_at" type="date"
                                value="{{ old('travel_end_at', $tour->travel_end_at ?? '') }}" />
                        </div>

                        <!-- Booking Dates -->
                        <div class="col-lg-3">
                            <x-generic-form-input label="Booking Start Date" name="booking_start_at" type="date"
                                value="{{ old('booking_start_at', $tour->booking_start_at ?? '') }}" />
                        </div>

                        <div class="col-lg-3">
                            <x-generic-form-input label="Booking End Date" name="booking_end_at" type="date"
                                value="{{ old('booking_end_at', $tour->booking_end_at ?? '') }}" />
                        </div>
                    </div>

                    <div class="row">


                        <!-- Slug -->
                        <div class="col-lg-3">
                            <x-slug-form-input label="Slug" name="slug" placeholder="Enter slug..." required="true"
                                id="slug-input" class="form-control slug-input" slugFrom="name"
                                value="{{ old('slug', $tour->slug ?? '') }}" />
                        </div>

                        <!-- Banner Image -->
                        <div class="col-lg-3">
                            <x-generic-form-input label="Banner Image" name="banner_image" type="file"
                                accept="image/*" />
                            @if (isset($tour->banner_image))
                                <img src="{{ asset($tour->banner_image) }}" alt="Banner Image"
                                    class="img-thumbnail mt-2" style="max-width: 100px;">
                            @endif
                        </div>
                        <!-- Map Image -->
                        <div class="col-lg-3">
                            <x-generic-form-input label="Map Image" name="map" type="file"
                                accept="image/*" />
                            @if (isset($tour->map))
                                <img src="{{ asset($tour->map) }}" alt="Map Image"
                                    class="img-thumbnail mt-2" style="max-width: 100px;">
                            @endif
                        </div>

                         <!-- Status -->
                         <div class="col-lg-3">
                            <x-generic-dropdown label="Status" name="is_active" :options="[
                                '1' => 'Enabled',
                                '0' => 'Disabled',
                            ]" required="true"
                                selected="{{ old('is_active', $tour->is_active ?? '1') }}" />
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-3 col-12"></div>

                            <x-generic-button type="submit" class="btn btn-primary btn-lg btn-block" id="submitBtn"
                                icon="fa fa-check-circle" text="{{ isset($tour) ? 'Update' : 'Save' }}" />

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
