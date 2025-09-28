<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MSocialAssistanceSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_social_assistance')->insert(
            [
                [
                    'social_assistance_name' => 'PKH',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'social_assistance_name' => 'BLT',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]
            ]
        );
    }
}
