<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MJobSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_job')->insert(
            [
                [
                    'job_name' => 'Mengurus Rumah Tangga',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Pelajar/Mahasiswa',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Belum/Tidak Bekerja',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Wiraswasta',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Petani/Pekebun',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Karyawan Swasta',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Pensiunan',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Pegawai Negeri Sipil (PNS)',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Guru',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Sopir',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Pendeta',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Tukang Kayu',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Karyawan Honorer',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Buruh Harian Lepas',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Perangkat Desa',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Pedagang',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Kepala Desa',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Perdagangan',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Tukang Las/Pandai Besi',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Pengacara',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Buruh Tani/Perkebunan',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Tentara Nasional Indonesia (TNI)',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Seniman',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Perawat',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Pelaut',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Lainnya',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Kepolisian RI (Polri)',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Nelayan/Perikanan',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Pemilik Perusahaan',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Pemilik Usaha Jasa Hiburan dan Pariwisata',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Mekanik',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Peneliti',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Peternak',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Penerjemah',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Pastor',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Notaris',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ],
                [
                    'job_name' => 'Anggota Legislatif',
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]
            ]
        );
    }
}
