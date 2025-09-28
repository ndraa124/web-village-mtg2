<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name'       => 'Administration',
                'nik'        => '7105072207950001',
                'password'   => Hash::make('admin123', ['salt' => 10]),
                'role'       => 'superadmin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
    }
}
