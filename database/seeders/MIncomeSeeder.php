<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MIncomeSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_income')->insert(
            [
                [
                    'income_name' => 'Pendapatan Asli Desa',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'income_name' => 'Pendapatan Transfer',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'income_name' => 'Pendapatan Lain-lain',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]
            ]
        );
    }
}
