<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; //tambahkan ini

class proyek extends Model
{
    use HasFactory; //tambahkan ini
    protected $fillable = [ //tambahkan ini semua sesuai yang ada di migration tadi
        'kode_proyek',
        'nama_proyek',
        'klien',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
        'anggaran',
        'deskripsi',
    ];

    protected $primaryKey = 'kode_proyek'; 
    //tambahkan ini, kasihtau yg primarykey yang mana
    public $incrementing = false; 
    //pakai ini kalau id nya kita isi sendiri (kalau tabel kita iya)

    public $timestamps = false; //tambah ini kalau tabel ada tanggal2nya
}


