<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MEducationSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_education')->insert(
            [
                [
                    'education_name' => 'Tidak/Belum Sekolah',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'education_name' => 'Belum Tamat SD/Sederajat',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'education_name' => 'Tamat SD/Sederajat',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'education_name' => 'SLTP/Sederajat',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'education_name' => 'SLTA/Sederajat',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'education_name' => 'Diploma I/II',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'education_name' => 'Diploma III/Sarjana Muda',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'education_name' => 'Diploma IV/Strata I',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'education_name' => 'Strata II',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'education_name' => 'Strata III',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]
            ]
        );
    }
}
