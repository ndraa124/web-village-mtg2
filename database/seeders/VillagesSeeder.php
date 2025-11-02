<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillagesSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('villages')->insert(
            [
                'name'         => 'Desa Motoling Dua',
                'description'  => '',
                'village_head' => '',
                'subdistrict'  => '',
                'regency'      => '',
                'province'     => '',
                'address'      => '',
                'phone'        => '',
                'email'        => '',
                'facebook'     => '',
                'instagram'    => '',
                'twitter'      => '',
                'logo'         => '',
                'created_at'   => now(),
                'updated_at'   => now()
            ],
        );
    }
}
