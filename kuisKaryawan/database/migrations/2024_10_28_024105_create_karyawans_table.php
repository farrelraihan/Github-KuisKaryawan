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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->char('kode_karyawan', 10)->primary();
            $table->char('nama_karyawan', 20 );
            $table->char('jabatan', 20);
            $table->char('nip', 8);
            $table->dateTime('tanggal_masuk');
            $table->char('alamat', 55);
            $table->char('no_hp', 15);
            $table->char('email', 55);
            $table->integer('gaji');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
