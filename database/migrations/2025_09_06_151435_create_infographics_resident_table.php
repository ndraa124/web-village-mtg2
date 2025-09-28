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
        Schema::create('infographics_resident', function (Blueprint $table) {
            $table->id();
            $table->integer('t_resident')->length(20);
            $table->integer('t_man')->length(20);
            $table->integer('t_woman')->length(20);
            $table->integer('t_head_of_family')->length(20);
            $table->integer('t_temporary')->length(20);
            $table->integer('t_mutation')->length(20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infographics_resident');
    }
};
