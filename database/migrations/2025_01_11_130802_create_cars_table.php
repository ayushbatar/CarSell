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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maker_id')->constrained('makers');
            $table->foreignId('model_id')->constrained('models');
            $table->foreignId('car_type_id')->constrained('car_types');
            $table->foreignId('fuel_type_id')->constrained('fuel_types');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('city_id')->constrained('cities');
            $table->integer('year');
            $table->integer('mileage')->nullable();
            $table->integer('price')->nullable();
            $table->string('vin')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->text('discription')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            // $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
