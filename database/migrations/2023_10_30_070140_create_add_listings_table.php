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
        Schema::create('add_listings', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('listing_title');
            $table->string('type');
            $table->string('make');
            $table->string('model');
            $table->decimal('price', 10, 2); // Adjust precision and scale as needed
            $table->string('drive_type');
            $table->string('transmission');
            $table->string('fuel_type');
            $table->integer('mileage');
            $table->string('color');
            $table->string('seats');
            $table->text('description');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_listings');
    }
};
