<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MHamletSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_hamlet')->insert(
            [
                [
                    'hamlet_name' => 'I',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'hamlet_name' => 'II',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'hamlet_name' => 'III',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'hamlet_name' => 'IV',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'hamlet_name' => 'V',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'hamlet_name' => 'VI',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]
            ]
        );
    }
}
