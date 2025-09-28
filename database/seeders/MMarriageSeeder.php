<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MMarriageSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_marriage')->insert(
            [
                [
                    'marriage_name' => 'Belum Kawin',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'marriage_name' => 'Kawin',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'marriage_name' => 'Kawin Tercatat',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'marriage_name' => 'Cerai Mati',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'marriage_name' => 'Kawin Tidak Tercatat',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'marriage_name' => 'Cerai Hidup',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]
            ]
        );
    }
}
