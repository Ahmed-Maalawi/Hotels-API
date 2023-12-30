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
        Schema::create('top_hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedTinyInteger('rate');
            $table->decimal('price', 6, 2);
            $table->decimal('discount', 6, 2)->nullable();
            $table->text('amenities');
            $table->timestamps();
        });

//        rate: String of '*' (from 1 to 5)
//- price: Price of the hotel per night
//    - discount: discount on the room (if available).
//- amenities: array of strings.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_hotels');
    }
};
