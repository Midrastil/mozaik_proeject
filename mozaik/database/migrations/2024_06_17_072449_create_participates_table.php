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
        Schema::create('participates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roundID');
            $table->unsignedBigInteger('contestantID');
            $table->timestamps();

        });

        Schema::table('participates', function (Blueprint $table) {
            $table->foreign('roundID')->references('id')->on('rounds');
            $table->foreign('contestantID')->references('id')->on('contestants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participates');
    }
};
