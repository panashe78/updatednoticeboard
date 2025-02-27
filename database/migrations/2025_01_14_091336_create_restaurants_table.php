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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id');
            $table->string('profile_photo');
            $table->longText('address');
            $table->integer('rating');
            $table->string('city');
            $table->string('phone_number');
            $table->string('website');
            $table->integer('average_price');
            $table->time('opening_hours');
            $table->string('description');
            $table->string('email');
            $table->boolean('approval')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
