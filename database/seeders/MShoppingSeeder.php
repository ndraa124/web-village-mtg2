<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MShoppingSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_shopping')->insert(
            [
                [
                    'shopping_name' => 'Penyelenggaraan Pemerintahan Desa',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'shopping_name' => 'Pelaksanaan Pembangunan Desa',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'shopping_name' => 'Pembinaan Kemasyarakatan Desa',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'shopping_name' => 'Pemberdayaan Masyarakat Desa',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'shopping_name' => 'Penanggulangan Bencana, Keadaan Darurat, dan Keadaan Mendesak Desa',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]
            ]
        );
    }
}
