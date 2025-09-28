<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MFinancingSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_financing')->insert(
            [
                [
                    'financing_name' => 'Penerimaan',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'financing_name' => 'Pengeluaran',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]
            ]
        );
    }
}
