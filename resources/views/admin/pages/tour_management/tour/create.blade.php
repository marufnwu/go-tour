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

                    <div class="row">
                        <!-- Arrival City -->
                        <div class="col-lg-4">
                            <x-generic-dropdown label="Arrival City" name="arrival_city" :options="$cities->pluck('city_name', 'id')->toArray()"
                                selected="{{ old('arrival_city', $tour->arrival_city ?? '') }}" />
                        </div>

                        <!-- Departure City -->
                        <div class="col-lg-4">
                            <x-generic-dropdown label="Departure City" name="departure_city" :options="$cities->pluck('city_name', 'id')->toArray()"
                                selected="{{ old('departure_city', $tour->departure_city ?? '') }}" />
                        </div>

                        <!-- Price Range -->
                        <div class="col-lg-4">
                            <x-generic-form-input label="Minimum Price" name="min_price" type="number" step="0.01"
                                placeholder="Enter minimum price..."
                                value="{{ old('min_price', $tour->min_price ?? '') }}" />
                        </div>

                        <div class="col-lg-4 mt-2">
                            <x-generic-form-input label="Maximum Price" name="max_price" type="number" step="0.01"
                                placeholder="Enter maximum price..."
                                value="{{ old('max_price', $tour->max_price ?? '') }}" />
                        </div>
                    </div>

                    <div class="row">
                        <!-- Travel Dates -->
                        <div class="col-lg-4">
                            <x-generic-form-input label="Travel Start Date" name="travel_strat_at" type="date"
                                value="{{ old('travel_strat_at', $tour->travel_strat_at ?? '') }}" />
                        </div>

                        <div class="col-lg-4">
                            <x-generic-form-input label="Travel End Date" name="travel_end_at" type="date"
                                value="{{ old('travel_end_at', $tour->travel_end_at ?? '') }}" />
                        </div>

                        <!-- Booking Dates -->
                        <div class="col-lg-4">
                            <x-generic-form-input label="Booking Start Date" name="booking_start_at" type="date"
                                value="{{ old('booking_start_at', $tour->booking_start_at ?? '') }}" />
                        </div>

                        <div class="col-lg-4">
                            <x-generic-form-input label="Booking End Date" name="booking_end_at" type="date"
                                value="{{ old('booking_end_at', $tour->booking_end_at ?? '') }}" />
                        </div>
                    </div>

                    <div class="row">
                        <!-- Status -->
                        <div class="col-lg-4">
                            <x-generic-dropdown label="Status" name="is_active" :options="[
                                '1' => 'Enabled',
                                '0' => 'Disabled',
                            ]" required="true"
                                selected="{{ old('is_active', $tour->is_active ?? '1') }}" />
                        </div>

                        <!-- Slug -->
                        <div class="col-lg-4">
                            <x-slug-form-input label="Slug" name="slug" placeholder="Enter slug..." required="true"
                                id="slug-input" class="form-control slug-input" slugFrom="name"
                                value="{{ old('slug', $tour->slug ?? '') }}" />
                        </div>

                        <!-- Banner Image -->
                        <div class="col-lg-4">
                            <x-generic-form-input label="Banner Image" name="banner_image" type="file"
                                accept="image/*" />
                            @if (isset($tour->banner_image))
                                <img src="{{ asset($tour->banner_image) }}" alt="Banner Image"
                                    class="img-thumbnail mt-2" style="max-width: 100px;">
                            @endif
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

            <!-- Itineraries Section -->
            <div class="card shadow m-4">


                <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-solid fa-plus"></i> Itineraries
                    </h6>
                    <button type="button" id="add-itinerary-btn" class="btn btn-primary btn-sm ">
                        <i class="fa fa-plus"></i> Add Itinerary
                    </button>
                </div>
                <div class="row mt-4 p-4">
                    <div class="col-12">
                        <div id="itineraries-container">
                            <!-- Placeholder for dynamically added itineraries -->
                            @if (isset($tour) && $tour->itineraries)
                                @foreach ($tour->itineraries as $index => $itinerary)
                                    <div class="itinerary-row" data-index="{{ $index }}">
                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <x-generic-form-input label="Day"
                                                    name="itineraries[{{ $index }}][day_no]" type="number"
                                                    value="{{ $itinerary->day_no }}" required="true" />
                                            </div>
                                            <div class="col-md-4">
                                                <x-generic-form-input label="Title"
                                                    name="itineraries[{{ $index }}][title]" type="text"
                                                    value="{{ $itinerary->title }}" required="true" />
                                            </div>
                                            <div class="col-md-4">
                                                <x-generic-form-input label="Image"
                                                    name="itineraries[{{ $index }}][image]" type="file"
                                                    accept="image/*" />
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-danger btn-sm remove-itinerary">
                                                    Remove
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let itineraryIndex = {{ isset($tour) ? $tour->itineraries->count() : 0 }};
            const itinerariesContainer = document.getElementById('itineraries-container');
            const addItineraryBtn = document.getElementById('add-itinerary-btn');

            // Pass PHP variable to JavaScript
            const dayItineraries = @json($dayIteneries->pluck('gti_id', 'id'));

            addItineraryBtn.addEventListener('click', function() {
                const newRow = document.createElement('div');
                newRow.classList.add('itinerary-row', 'card-header');
                newRow.dataset.index = itineraryIndex;


                // Dynamically populate dropdown options
                let dropdownOptions = '';
                for (const [id, gti_id] of Object.entries(dayItineraries)) {
                    dropdownOptions += `<option value="${id}">${gti_id}</option>`;
                }

                newRow.innerHTML = `
                        <div class="row g-default py-2 d-flex justify-content-between align-items-center">
                            <div class="col-md-1"><x-generic-form-input label="Day" name="itineraries[${itineraryIndex}][day_no]" type="number" required="true" /></div>
                            <div class="col-md-3"><x-generic-form-input label="Title" name="itineraries[${itineraryIndex}][title]" type="text" required="true" /></div>
                            <div class="col-lg-2">
                                <label for="itineraries[${itineraryIndex}][destination_id]">Day Itinerary</label>
                                <select class="form-control" name="itineraries[${itineraryIndex}][destination_id]" required>${dropdownOptions}</select>
                            </div>
                            <div class="col-md-2"><x-generic-form-input label="Image" name="itineraries[${itineraryIndex}][image]" type="file" accept="image/*" /></div>
                            <div class="col-md-1"><button type="button" class="btn btn-danger btn-sm remove-itinerary">Remove</button></div>
                        </div>
                    `;
                itinerariesContainer.appendChild(newRow);
                itineraryIndex++;
            });

            itinerariesContainer.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-itinerary')) {
                    e.target.closest('.itinerary-row').remove();
                }
            });
        });
    </script>

@endsection
