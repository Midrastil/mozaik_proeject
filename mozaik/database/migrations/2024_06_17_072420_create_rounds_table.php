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
        Schema::create('rounds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('maxContestant');
            $table->string('winner');
            $table->string('competitionName');
            $table->integer('competitionYear');
            $table->timestamps();

        });

        Schema::table('rounds', function (Blueprint $table) {
            $table->foreign('competitionName')->references('name')->on('competitions');
            $table->foreign('competitionYear')->references('year')->on('competitions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rounds');
    }
};
