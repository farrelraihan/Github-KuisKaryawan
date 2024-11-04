<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\karyawan;

class karyawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karyawanData = [
            ['kode_karyawan' => 'K001', 'nama_karyawan' => 'Andi', 'jabatan' => 'Developer', 'nip' => '123456', 'tanggal_masuk' => '2022-01-01 09:00:00', 'alamat' => 'Jl. Merpati No.1', 'no_hp' => '081234567890', 'email' => 'andi@example.com', 'gaji' => 7000000],
            ['kode_karyawan' => 'K002', 'nama_karyawan' => 'Budi', 'jabatan' => 'Designer', 'nip' => '123457', 'tanggal_masuk' => '2022-02-01 09:00:00', 'alamat' => 'Jl. Kenari No.2', 'no_hp' => '081234567891', 'email' => 'budi@example.com', 'gaji' => 6000000],
            ['kode_karyawan' => 'K003', 'nama_karyawan' => 'Cici', 'jabatan' => 'Manager', 'nip' => '123458', 'tanggal_masuk' => '2022-03-01 09:00:00', 'alamat' => 'Jl. Elang No.3', 'no_hp' => '081234567892', 'email' => 'cici@example.com', 'gaji' => 8000000],
            ['kode_karyawan' => 'K004', 'nama_karyawan' => 'Dedi', 'jabatan' => 'Analyst', 'nip' => '123459', 'tanggal_masuk' => '2022-04-01 09:00:00', 'alamat' => 'Jl. Rajawali No.4', 'no_hp' => '081234567893', 'email' => 'dedi@example.com', 'gaji' => 6500000],
            ['kode_karyawan' => 'K005', 'nama_karyawan' => 'Eka', 'jabatan' => 'Tester', 'nip' => '123460', 'tanggal_masuk' => '2022-05-01 09:00:00', 'alamat' => 'Jl. Garuda No.5', 'no_hp' => '081234567894', 'email' => 'eka@example.com', 'gaji' => 6000000],
            ['kode_karyawan' => 'K006', 'nama_karyawan' => 'Feri', 'jabatan' => 'Support', 'nip' => '123461', 'tanggal_masuk' => '2022-06-01 09:00:00', 'alamat' => 'Jl. Bangau No.6', 'no_hp' => '081234567895', 'email' => 'feri@example.com', 'gaji' => 5500000],
        ];

        foreach ($karyawanData as $karyawan) {
            Karyawan::create($karyawan);
        }
    }
}
