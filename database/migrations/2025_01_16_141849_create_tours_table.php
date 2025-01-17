<?php

use App\Models\City;
use App\Models\Destination;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id()->startingValue(1000);
            $table->foreignIdFor(Destination::class);
            $table->integer("number")->nullable();
            $table->string("name");
            $table->string("map")->nullable();
            $table->integer("duration")->comment("In days");
            $table->foreignIdFor(City::class, "arrival_city")->nullable();
            $table->foreignIdFor(City::class, "departure_city")->nullable();
            $table->float("min_price", 10, 2)->nullable();
            $table->float("max_price", 10, 2)->nullable();
            $table->string("banner_image")->nullable();
            $table->string("slug")->nullable();
            $table->timestamp("travel_strat_at")->nullable();
            $table->timestamp("travel_end_at")->nullable();
            $table->timestamp("booking_start_at")->nullable();
            $table->timestamp("booking_end_at")->nullable();
            $table->boolean("is_active")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
