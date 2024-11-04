<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; //tambahkan ini

class karyawan_proyek extends Model
{
    use HasFactory; //tambahkan ini
    protected $fillable = [ //tambahkan ini semua sesuai yang ada di migration tadi
        'kode_karyawanProyek',
        'kode_karyawan',
        'kode_proyek',
        'peran',
        'tanggal_mulai_peran',
        'tanggal_selesai_peran',
    ];

    protected $primaryKey = 'kode_karyawanProyek'; 
    //tambahkan ini, kasihtau yg primarykey yang mana
    public $incrementing = false; 
    //pakai ini kalau id nya kita isi sendiri (kalau tabel kita iya)

    public $timestamps = false; //tambah ini kalau tabel ada tanggal2nya
}
