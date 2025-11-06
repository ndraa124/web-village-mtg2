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
        Schema::table('villages', function (Blueprint $table) {
            $table->string('map_latitude')->nullable()->after('email');
            $table->string('map_longitude')->nullable()->after('map_latitude');
            $table->integer('map_zoom')->default(14)->after('map_longitude');
            $table->string('operational_hours_weekdays')->nullable()->after('email');
            $table->string('operational_hours_weekends')->nullable()->after('operational_hours_weekdays');
            $table->string('youtube')->nullable()->after('twitter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('villages', function (Blueprint $table) {
            $table->dropColumn([
                'map_latitude',
                'map_longitude',
                'map_zoom',
                'operational_hours_weekdays',
                'operational_hours_weekends',
                'youtube'
            ]);
        });
    }
};
