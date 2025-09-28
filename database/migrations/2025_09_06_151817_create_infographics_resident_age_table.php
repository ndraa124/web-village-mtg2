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
        Schema::create('infographics_resident_age', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('gender_id')->length(20)->index();
            $table->string('age', 20);
            $table->integer('total')->length(20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infographics_resident_age');
    }
};
