<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_offers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resort_id')->constrained()->onDelete('cascade'); // Assumes a resorts table exists
            $table->string('title'); // Title of the offer
            $table->text('description')->nullable(); // Description of the offer
            $table->decimal('price', 10, 2)->nullable(); // Price of the offer
            $table->date('valid_until'); // Expiry date of the offer
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offers');
    }
}