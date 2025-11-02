<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MEducationSeeder::class,
            MGenderSeeder::class,
            MHamletSeeder::class,
            MJobSeeder::class,
            MMarriageSeeder::class,
            MReligionSeeder::class,
            MIncomeSeeder::class,
            MShoppingSeeder::class,
            MFinancingSeeder::class,
            MStuntingSeeder::class,
            MSocialAssistanceSeeder::class,
            MIDMStatusSeeder::class,
            VillagesSeeder::class,
            UserSeeder::class
        ]);
    }
}
