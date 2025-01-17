<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\DestinationCategory;
use App\Rules\Slug;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::with('category')
            // ->where("is_active", true)
            ->orderByDesc("created_at")
            ->get();

        return view("admin.pages.tour_management.destination.index", compact("destinations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DestinationCategory::where("is_active", true)->get();
        return view("admin.pages.tour_management.destination.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|max:50",
            "description" => "nullable|string",
            "is_active" => "required|boolean",
            "slug" => ["nullable", "string", "unique:destinations,slug", new Slug()],
            "destination_category_id" => "required|exists:destination_categories,id", // Ensure the category exists
        ]);

        $destination = Destination::create($validatedData);

        if ($destination) {
            return redirect()->route("destination.create")->with(["success" => "Destination created successfully!"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $destination = Destination::with('category', 'tours')->findOrFail($id);
        return view("admin.pages.tour_management.destination.show", compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        $categories = DestinationCategory::all(); // Fetch all categories
        return view("admin.pages.tour_management.destination.create", compact("destination", 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        $validatedData = $request->validate([
            "name" => "required|max:50",
            "description" => "nullable|string",
            "is_active" => "required|boolean",
            "slug" => ["nullable", "string", "unique:destinations,slug," . $destination->id, new Slug()],
            "destination_category_id" => "required|exists:destination_categories,id", // Ensure the category exists
        ]);

        $destination->update($validatedData);

        return redirect()->route("destination.index")->withSuccess("Destination updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        if ($destination->delete()) {
            return redirect()->route("destination.index")->withSuccess("Destination deleted successfully");
        }

        return redirect()->route("destination.index")->withError("Destination deletion failed");
    }
}
