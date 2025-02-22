<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public $withinTransaction = false; // Disable transactions

    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->text("image_link");
            $table->string("city");
            $table->bigInteger("day_num");
            $table->bigInteger("cost");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
