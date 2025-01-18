<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Dayitinerary;
use App\Models\Destination;
use App\Models\Tour;
use App\Utils\ImageHelper;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::get();
        return view("admin.pages.tour_management.tour.index", compact("tours"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinations = Destination::where("is_active", true)->get();
        $cities = City::all();
        $dayIteneries = Dayitinerary::all();
        return view("admin.pages.tour_management.tour.create", compact("destinations", "cities", "dayIteneries"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'destination_id' => 'required|exists:destinations,id',  // Validate foreign key
            'number' => 'nullable|integer|min:1',                  // Optional, must be a positive integer
            'name' => 'required|string|max:255',                  // Required, string with a maximum length
            'map' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Required map image file (2MB max)
            'duration' => 'required|integer|min:1',               // Required, must be a positive integer (days)
            'arrival_city' => 'nullable|exists:city,id',         // Validate foreign key for arrival city
            'departure_city' => 'nullable|exists:city,id',       // Validate foreign key for departure city
            'min_price' => 'nullable|numeric|min:0',               // Optional, must be numeric and non-negative
            'max_price' => 'nullable|numeric|gte:min_price',       // Optional, must be numeric and >= min_price
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',           // Optional, banner image file (2MB max)
            'slug' => 'nullable|string|max:255|unique:tours,slug',  // Optional, must be unique in the table
            'travel_start_at' => 'nullable|date|before_or_equal:travel_end_at', // Optional, must be a valid date
            'travel_end_at' => 'nullable|date|after_or_equal:travel_start_at',  // Optional, must be a valid date
            'booking_start_at' => 'nullable|date|before_or_equal:booking_end_at', // Optional, must be a valid date
            'booking_end_at' => 'nullable|date|after_or_equal:booking_start_at',  // Optional, must be a valid date
            'is_active' => 'required|boolean',                     // Required, must be true or false
        ]);

        // Handle map image upload
        if ($request->hasFile('map')) {
            $validatedData['map'] = ImageHelper::handleImageUpload($request->file('map'), 'maps');
        }

        // Handle banner image upload
        if ($request->hasFile('banner_image')) {
            $validatedData['banner_image'] = ImageHelper::handleImageUpload($request->file('banner_image'), 'banner_images');
        }


        // Save the validated data into the database
        $tour = Tour::create($validatedData);


        return redirect()->back()->with('success', 'Tour created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        return view("admin.pages.tour_management.tour.show", compact("tour"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        $destinations = Destination::where("is_active", true)->get();
        $cities = City::all();
        $dayIteneries = Dayitinerary::all();
        return view("admin.pages.tour_management.tour.create", compact("destinations", "cities", "dayIteneries", "tour"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
