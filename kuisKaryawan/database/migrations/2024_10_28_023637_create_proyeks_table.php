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
        Schema::create('proyeks', function (Blueprint $table) {
            $table->char('kode_proyek', 10) -> primary();
            $table->char('nama_proyek', 20);
            $table->char('klien', 55);
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_selesai');
            $table->enum('status', ['Berjalan', 'Selesai', 'Tertunda']); // S = Selesai, B= Berjalan, T= Tertunda
            $table->integer('anggaran');
            $table->char('deskripsi', 255);
            // $table->timestamps();
            // HAPUS $TIMESTAMPS ITU DARI MIGRATION INI, TAMBAHANKAN:
            //public $timestamps = false;
            // di model
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyeks');
    }
};
