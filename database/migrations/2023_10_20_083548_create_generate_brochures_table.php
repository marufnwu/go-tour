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
        Schema::create('generate_brochures', function (Blueprint $table) {
            $table->id();

            $table->string('second_tourleader_firstn')->nullable();
            $table->string('second_tourleader_lastn')->nullable();
            $table->string('second_tourleader_email')->nullable();
            $table->integer('second_tourleader_phone')->nullable();           
            $table->string('profile_image_path');
            $table->string('language');
            $table->string('departure_city');
            $table->string('arrival_city');
            $table->integer('tour_cost');
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->string('description');
            $table->string('tour_leader_firstn');
            $table->string('tour_leader_lastn');
            $table->string('tour_leader_email');
            $table->string('tour_leader_phone');
            $table->string('tour_leader_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generate_brochures');
    }
};
