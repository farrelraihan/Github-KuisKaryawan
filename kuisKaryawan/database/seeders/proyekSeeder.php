<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\proyek;

class proyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proyekData = [
            ['kode_proyek' => 'P001', 'nama_proyek' => 'Proyek A', 'klien' => 'PT Maju Jaya', 'tanggal_mulai' => '2024-01-15 10:00:00', 'tanggal_selesai' => '2024-06-15 17:00:00', 'status' => 'Selesai', 'anggaran' => 100000000, 'deskripsi' => 'Pengembangan aplikasi mobile untuk pemesanan makanan'],
            ['kode_proyek' => 'P002', 'nama_proyek' => 'Proyek B', 'klien' => 'CV Karya Bersama', 'tanggal_mulai' => '2024-03-01 09:00:00', 'tanggal_selesai' => '2024-08-31 16:00:00', 'status' => 'Berjalan', 'anggaran' => 50000000, 'deskripsi' => 'Desain dan implementasi sistem informasi akademik'],
            ['kode_proyek' => 'P003', 'nama_proyek' => 'Proyek C', 'klien' => 'UD Sejahtera', 'tanggal_mulai' => '2024-05-10 11:00:00', 'tanggal_selesai' => '2024-10-10 18:00:00', 'status' => 'Tertunda', 'anggaran' => 75000000, 'deskripsi' => 'Pembuatan website e-commerce untuk produk fashion'],
        ];

        foreach ($proyekData as $proyek) {
            Proyek::create($proyek);
        }
    }
}
