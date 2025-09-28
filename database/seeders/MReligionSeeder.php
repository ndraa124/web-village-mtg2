<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MReligionSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_religion')->insert(
            [
                [
                    'religion_name' => 'Kristen',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'religion_name' => 'Islam',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'religion_name' => 'Katolik',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'religion_name' => 'Buddha',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'religion_name' => 'Konghucu',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'religion_name' => 'Hindu',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'religion_name' => 'Kepercayaan lainnya',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]
            ]
        );
    }
}
