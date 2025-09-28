<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MGenderSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_gender')->insert(
            [
                [
                    'gender_name' => 'Laki-Laki',
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ],
                [
                    'gender_name' => 'Perempuan',
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ]
            ]
        );
    }
}
