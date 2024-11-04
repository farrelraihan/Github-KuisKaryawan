<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('karyawan_proyeks', function (Blueprint $table) {
            $table->char('kode_karyawanProyek', 10)->primary();
            $table->char('kode_karyawan', 10);
            $table->char('kode_proyek', 10);
            $table->char('peran',55);
            $table->dateTime('tanggal_mulai_peran');
            $table->dateTime('tanggal_selesai_peran');
            // HAPUS $TIMESTAMPS ITU DARI MIGRATION INI, TAMBAHANKAN:
            //public $timestamps = false; // DIMODELLL
            // di model
            
            $table->foreign('kode_karyawan')->references('kode_karyawan')->on('karyawans');
            $table->foreign('kode_proyek')->references('kode_proyek')->on('proyeks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan_proyeks');
    }
};
