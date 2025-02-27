<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->unsignedBigInteger('view_count')->default(0); // Add the view_count column
        });
    }
    
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropColumn('view_count'); // Drop the column if rolling back
        });
    }
};
