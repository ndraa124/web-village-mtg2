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
        Schema::create('infographics_apbd_development_realization', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->string('category_name', 100);
            $table->tinyInteger('percent')->length(3)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infographics_apbd_development_realization');
    }
};
