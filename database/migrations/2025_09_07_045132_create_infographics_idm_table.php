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
        Schema::create('infographics_idm', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('year')->length(4);
            $table->bigInteger('idm_status_id')->length(20)->index();
            $table->decimal('min_score', 6, 4)->default(0.0000);
            $table->decimal('iks_score', 6, 4)->default(0.0000);
            $table->decimal('ike_score', 6, 4)->default(0.0000);
            $table->decimal('ikl_score', 6, 4)->default(0.0000);
            $table->decimal('addition_score', 6, 4)->default(0.0000);
            $table->decimal('total_score', 6, 4)->default(0.0000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infographics_idm');
    }
};
