<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use App\Models\DestinationCategory;
use App\Rules\Slug;
use Illuminate\Http\Request;

class TourCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DestinationCategory::where("is_active", true)->orderByDesc("created_at")->get();

        return view("admin.pages.tour_management.category.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.tour_management.category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name"=>"required|max:50",
            "is_active"=>"required|boolean",
            "slug"=>["nullable", "string", "unique:destination_categories,slug", new Slug()]
        ]);


        $c = DestinationCategory::create(
            $validatedData
        );

        if($c){
            return redirect()->route("destination-category.index")->with(["success"=>"Destiantion category created successfully!"]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DestinationCategory $destinationCategory)
    {
        return view("admin.pages.tour_management.category.create", compact("destinationCategory"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DestinationCategory $destinationCategory)
    {
        $validatedData = $request->validate([
            "name"=>"required|max:50",
            "is_active"=>"required|boolean",
            "slug"=>["nullable", "string", "unique:destination_categories,slug,".$destinationCategory->id, new Slug()],
        ]);

        $destinationCategory->update($validatedData);

        return redirect()->route("destination-category.index")->withSuccess("Category updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestinationCategory $destinationCategory)
    {
        if($destinationCategory->delete()){
            return redirect()->route("destination-category.index")->withSuccess("Category deleted successfully");
        }

        return redirect()->route("destination-category.index")->withError("Category deletion failed");

    }
}
