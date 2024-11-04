<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\karyawan_proyek;

class karyawan_proyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karyawanProyekData = [
            ['kode_karyawanProyek' => 'KP001', 'kode_karyawan' => 'K001', 'kode_proyek' => 'P001', 'peran' => 'Developer', 'tanggal_mulai_peran' => '2024-01-15 10:00:00', 'tanggal_selesai_peran' => '2024-03-15 17:00:00'],
            ['kode_karyawanProyek' => 'KP002', 'kode_karyawan' => 'K002', 'kode_proyek' => 'P001', 'peran' => 'Designer', 'tanggal_mulai_peran' => '2024-01-16 10:00:00', 'tanggal_selesai_peran' => '2024-06-15 17:00:00'],
            ['kode_karyawanProyek' => 'KP003', 'kode_karyawan' => 'K003', 'kode_proyek' => 'P002', 'peran' => 'Manager', 'tanggal_mulai_peran' => '2024-03-01 09:00:00', 'tanggal_selesai_peran' => '2024-05-31 16:00:00'],
            ['kode_karyawanProyek' => 'KP004', 'kode_karyawan' => 'K004', 'kode_proyek' => 'P002', 'peran' => 'Analyst', 'tanggal_mulai_peran' => '2024-04-01 10:00:00', 'tanggal_selesai_peran' => '2024-08-31 16:00:00'],
            ['kode_karyawanProyek' => 'KP005', 'kode_karyawan' => 'K005', 'kode_proyek' => 'P003', 'peran' => 'Tester', 'tanggal_mulai_peran' => '2024-05-10 11:00:00', 'tanggal_selesai_peran' => '2024-07-15 18:00:00'],
            ['kode_karyawanProyek' => 'KP006', 'kode_karyawan' => 'K006', 'kode_proyek' => 'P003', 'peran' => 'Support', 'tanggal_mulai_peran' => '2024-06-01 09:00:00', 'tanggal_selesai_peran' => '2024-10-10 18:00:00'],
        ];

        foreach ($karyawanProyekData as $karyawanProyek) {
            karyawan_proyek::create($karyawanProyek);
        }
    }
}
