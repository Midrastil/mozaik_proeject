<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('competitions', function (Blueprint $table) {
        $table->string('name');
        $table->integer('year');
        $table->string('winner');
        $table->timestamps();
        });

        Schema::table('competitions', function (Blueprint $table) {
        $table->primary(['name','year']);
        $table->index('year');
        $table->index('name');
        });
    }

        public function down(): void
        {
            Schema::dropIfExists('competitions');
        }
};
