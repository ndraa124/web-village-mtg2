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
        Schema::create('infographics_idm_indicator_ike', function (Blueprint $table) {
            $table->id();
            $table->string('indicator_name', 100);
            $table->tinyInteger('score')->length(2);
            $table->string('description', 100);
            $table->text('activities')->nullable();
            $table->decimal('value', 6, 4)->default(0.0000);
            $table->string('center', 100)->nullable();
            $table->string('province', 100)->nullable();
            $table->string('regency', 100)->nullable();
            $table->string('village', 100)->nullable();
            $table->string('csr', 100)->nullable();
            $table->string('other', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infographics_idm_indicator_ike');
    }
};
