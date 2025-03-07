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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->integer('price');
            $table->integer('quantity');
            $table->foreignId('restaurant_id');
            $table->foreignId('user_id');
            $table->string('description');
            $table->string('category');
            $table->boolean('availability');
            $table->integer('spicy_level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
