<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('car_features', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('car_id')->constrained('cars');

            // Selected 10 features
            $table->boolean('sunroof')->default(0);
            $table->boolean('bluetooth')->default(0);
            $table->boolean('backup_camera')->default(0);
            $table->boolean('navigation_system')->default(0);
            $table->boolean('heated_seats')->default(0);
            $table->boolean('automatic_emergency_braking')->default(0);
            $table->boolean('lane_departure_warning')->default(0);
            $table->boolean('adaptive_cruise_control')->default(0);
            $table->boolean('keyless_entry')->default(0);
            $table->boolean('led_headlights')->default(0);

            // $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_features');
    }
};
