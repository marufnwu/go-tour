@extends('admin.layouts.master')

@section('title', isset($tour->name) ? $tour->name : '')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('tour.index') }}">Manage Tours</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $tour->name }}</li>
            </ol>
        </nav>

        <!-- Card for Create/Edit -->
        <div class="card shadow mb-4">
            <div class="card-header bg-default py-2 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-info-circle"></i> Tour Details
                </h4>
                <div class="d-flex align-items-center">
                    <form class="deleteform d-inline-block m-1" action="{{ route('tour.destroy', $tour->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn  shadow-sm btn-rounded m-2 btn-danger deletebtn">
                            <span class="btn-label">
                                <i class="fas fa-trash"></i>
                            </span>
                        </button>
                    </form>
                    <a href="{{ route('tour.edit', $tour->id) }}" class="btn btn-success shadow-sm btn-rounded m-2">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="{{ route('tour.index') }}" class="btn btn-primary shadow-sm btn-rounded m-1">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </div>
            </div>

        </div>


        <div class="mt-5">
            <div class="row">
                <div class="col-md-6 ">
                    <!-- Tour Details Card -->
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Tour Details</h4>
                        </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-4">Tour Name</dt>
                                <dd class="col-sm-8">{{ $tour->name }}</dd>

                                <dt class="col-sm-4">Destination</dt>
                                <dd class="col-sm-8">{{ $tour->destination->name }}
                                    ({{ $tour->destination->category->name }})</dd>

                                <dt class="col-sm-4">Map</dt>
                                <dd class="col-sm-8">
                                    @if ($tour->map)
                                        <img src="{{ $tour->mapUrl }}" class="img-fluid"
                                            style="max-width: 100%; max-height: 200px;" alt="Map Image">
                                    @else
                                        <span>No map available</span>
                                    @endif
                                </dd>

                                <dt class="col-sm-4">Duration</dt>
                                <dd class="col-sm-8">{{ $tour->duration }} days</dd>

                                <dt class="col-sm-4">Arrival City</dt>
                                <dd class="col-sm-8">{{ $tour->arrivalCity->city_name }}</dd>

                                <dt class="col-sm-4">Departure City</dt>
                                <dd class="col-sm-8">{{ $tour->departureCity->city_name }}</dd>

                                <dt class="col-sm-4">Min Price</dt>
                                <dd class="col-sm-8">{{ number_format($tour->min_price, 2) }} USD</dd>

                                <dt class="col-sm-4">Max Price</dt>
                                <dd class="col-sm-8">{{ number_format($tour->max_price, 2) }} USD</dd>

                                <dt class="col-sm-4">Banner Image</dt>
                                <dd class="col-sm-8">
                                    @if ($tour->banner_image)
                                        <img src="{{ $tour->bannerImageUrl }}" class="img-fluid "
                                            style="max-width: 100%; max-height: 200px;" alt="Banner Image">
                                    @else
                                        <span>No banner image available</span>
                                    @endif
                                </dd>

                                <dt class="col-sm-4">Slug</dt>
                                <dd class="col-sm-8">{{ $tour->slug }}</dd>

                                <dt class="col-sm-4">Travel Start Date</dt>
                                <dd class="col-sm-8">{{ \Carbon\Carbon::parse($tour->travel_start_at)->format('M d, Y') }}
                                </dd>

                                <dt class="col-sm-4">Travel End Date</dt>
                                <dd class="col-sm-8">{{ \Carbon\Carbon::parse($tour->travel_end_at)->format('M d, Y') }}
                                </dd>

                                <dt class="col-sm-4">Booking Start Date</dt>
                                <dd class="col-sm-8">{{ \Carbon\Carbon::parse($tour->booking_start_at)->format('M d, Y') }}
                                </dd>

                                <dt class="col-sm-4">Booking End Date</dt>
                                <dd class="col-sm-8">{{ \Carbon\Carbon::parse($tour->booking_end_at)->format('M d, Y') }}
                                </dd>

                                <dt class="col-sm-4">Is Active</dt>
                                <dd class="col-sm-8">{{ $tour->is_active ? 'Yes' : 'No' }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Tour Details Card -->
                    <div class="card">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Itineraries</h4>
                            <a href="{{ route('tour.itinerary.create', $tour->id) }}"
                                class="d-none d-sm-inline-block btn btn-success shadow-sm btn-rounded">
                                <i class="fa fa-plus"></i>&nbsp; Add Itinerary </a>
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="tourItineraryAccordion">
                                @foreach ($tour->itineraries as $tourItinerary)
                                    <div class="card">
                                        <div class="card-header" id="heading{{ $tourItinerary->id }}">
                                            <h2 class="mb-0">
                                                <button
                                                    class="btn btn-link d-flex justify-content-between align-items-center w-100"
                                                    type="button" data-toggle="collapse"
                                                    data-target="#collapse{{ $tourItinerary->id }}" aria-expanded="false"
                                                    aria-controls="collapse{{ $tourItinerary->id }}">

                                                    <!-- Left Section: Collapse/Expand Icon and Title -->
                                                    <div class="d-flex align-items-center">
                                                        <!-- Collapse/Expand Icon -->
                                                        <span class="mr-2">
                                                            <i class="fa fa-plus" aria-hidden="true"
                                                                id="icon{{ $tourItinerary->id }}"></i>
                                                        </span>
                                                        <!-- Title and Day -->
                                                        <span>
                                                            {{ $tourItinerary->title }} (Day {{ $tourItinerary->day_no }})
                                                        </span>
                                                    </div>

                                                    <!-- Right Section: Edit and Delete Icons -->
                                                    <div>
                                                        <a href="{{ route('tour.itinerary.edit', [$tour->id, $tourItinerary->id]) }}"
                                                            class="text-primary mr-2">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>
                                                        <form id="deleteForm"
                                                            action="{{ route('tour.itinerary.destroy', [$tour->id, $tourItinerary->id]) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this itinerary?');"
                                                            style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <i class="fa fa-trash text-danger" aria-hidden="true"
                                                                style="cursor: pointer;"
                                                                onclick="document.getElementById('deleteForm').submit();"></i>
                                                        </form>

                                                    </div>
                                                </button>
                                            </h2>

                                        </div>

                                        <div id="collapse{{ $tourItinerary->id }}" class="collapse"
                                            aria-labelledby="heading{{ $tourItinerary->id }}"
                                            data-parent="#tourItineraryAccordion">
                                            <div class="card-body">
                                                <h5>Day Itinerary Details</h5>
                                                @if ($tourItinerary->image)
                                                <img src="{{ asset($tourItinerary->image) }}" class="img-fluid"
                                                style="width: 100%; height: 200px; object-fit: cover;" alt="Map Image">
                                                @endif
                                                <p><strong>Day No:</strong> {{ $tourItinerary->day_no }}</p>
                                                <p><strong>Title:</strong> {{ $tourItinerary->title }}</p>

                                                @if ($tourItinerary->dayItinerary)
                                                    <h6>Day Itinerary Information:</h6>
                                                    <ul>
                                                        <li><strong>Country:</strong>
                                                            {{ $tourItinerary->dayItinerary->cntry->country_name ?? 'N/A' }}
                                                        </li>
                                                        <li><strong>City:</strong>
                                                            {{ $tourItinerary->dayItinerary->cty->city_name ?? 'N/A' }}
                                                        </li>
                                                        <li><strong>Activity:</strong>
                                                            {{ $tourItinerary->dayItinerary->act->activity_name ?? 'N/A' }}
                                                        </li>
                                                        <li><strong>Sight:</strong>
                                                            {{ $tourItinerary->dayItinerary->sight->sight_name ?? 'N/A' }}
                                                        </li>
                                                        <li><strong>Distance:</strong>
                                                            {{ $tourItinerary->dayItinerary->dis->distant_sight_name ?? 'N/A' }}
                                                        </li>
                                                        <li><strong>Airport:</strong>
                                                            {{ $tourItinerary->dayItinerary->air->airport_name ?? 'N/A' }}
                                                        </li>
                                                    </ul>
                                                @else
                                                    <p>No day itinerary details available.</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Include FontAwesome for Icons -->
                            <link rel="stylesheet"
                                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

                            <!-- JavaScript to toggle icons between plus and minus -->
                            <script>
                                // Handle icon toggling for expand/collapse
                                $('#tourItineraryAccordion .collapse').on('show.bs.collapse', function() {
                                    var id = $(this).attr('id');
                                    $('#icon' + id.replace('collapse', '')).removeClass('fa-plus').addClass('fa-minus');
                                });

                                $('#tourItineraryAccordion .collapse').on('hide.bs.collapse', function() {
                                    var id = $(this).attr('id');
                                    $('#icon' + id.replace('collapse', '')).removeClass('fa-minus').addClass('fa-plus');
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')

@endsection
