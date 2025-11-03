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
        Schema::create('infographics_stunting', function (Blueprint $table) {
            $table->id();
            $table->integer('year')->length(4);
            $table->bigInteger('stunting_id')->length(20)->index();
            $table->bigInteger('total')->length(20);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infographics_stunting');
    }
};
