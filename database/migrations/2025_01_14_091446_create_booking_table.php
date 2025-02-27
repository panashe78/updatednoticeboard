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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->time('time');
            $table->integer('number_of_people');
            $table->date('date');
            $table->foreignId('restaurant_id');
            $table->foreignId('user_id');
            $table->longText('customer_name');
            $table->string('customer_phone');
            $table->string('customer_email');
            $table->integer('table_number');
            $table->string('special_requests');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
