<?php

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
        Schema::create('passenger_informations', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('nationality');
            $table->string('birth_date');
            $table->string('phone_number');
            $table->string('email');
            $table->string('tour_code');
            $table->integer('supplement_cost');
            $table->string('departure_city_id');
            $table->string('accomodation_id');
            $table->string('tourleader_tour_id');
            $table->string('payment_id');
            $table->string('password');
            $table->string('sharing_room');
            $table->string('image');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passenger_informations');
    }
};
