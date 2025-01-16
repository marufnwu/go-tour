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
        Schema::table('guide_reservation', function (Blueprint $table) {
            $table->string('tourleader_tour')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('guide_reservation', function (Blueprint $table) {
            $table->integer('tourleader_tour')->unsigned()->change(); // Revert to integer
        });
    }
};
