<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MStuntingSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_stunting')->insert(
            [
                [
                    'stunting_name' => 'Keluarga Sasaran',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'stunting_name' => 'Berisiko',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'stunting_name' => 'Baduta',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'stunting_name' => 'Balita',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'stunting_name' => 'Pasangan Usia Subur (PUS)',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'stunting_name' => 'PUS Hamil',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]
            ]
        );
    }
}
