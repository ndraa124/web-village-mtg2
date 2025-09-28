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
        Schema::create('infographics_apbd_income', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('year')->length(4);
            $table->bigInteger('income_id')->length(20)->index();
            $table->bigInteger('budget')->length(20);
            $table->tinyInteger('percent')->length(3)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infographics_apbd_income');
    }
};
