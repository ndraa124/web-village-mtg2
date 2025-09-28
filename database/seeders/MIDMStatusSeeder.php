<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MIDMStatusSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_idm_status')->insert(
            [
                [
                    'status_desc' => 'Sangat Tertinggal',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'status_desc' => 'Tertinggal',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'status_desc' => 'Berkembang',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'status_desc' => 'Maju',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'status_desc' => 'Mandiri',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]
            ]
        );
    }
}
