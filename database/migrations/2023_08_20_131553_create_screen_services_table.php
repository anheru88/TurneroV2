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
        Schema::create('screen_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('services_id');
            $table->unsignedBigInteger('screen_id');
            $table->timestamps();

            // Define foreign keys
            $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('screen_id')->references('id')->on('screens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('screen_services');
    }
};
