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
        Schema::table('sights_reservation', function (Blueprint $table) {
            $table->string('sight_visit_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sights_reservation', function (Blueprint $table) {
            $table->dropColumn('sight_visit_date');
        });
    }
};
