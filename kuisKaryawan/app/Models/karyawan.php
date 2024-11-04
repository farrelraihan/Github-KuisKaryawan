<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; //tambahkan ini

class karyawan extends Model
{
    use HasFactory; //tambahkan ini
    protected $fillable = [ //tambahkan ini semua sesuai yang ada di migration tadi
        'kode_karyawan',
        'nama_karyawan',
        'jabatan',
        'nip',
        'tanggal_masuk',
        'alamat',
        'no_hp',
        'email',
        'gaji',
    ];

    protected $primaryKey = 'kode_karyawan'; 
    //tambahkan ini, kasihtau yg primarykey yang mana
    public $incrementing = false; 
    //pakai ini kalau id nya kita isi sendiri (kalau tabel kita iya)

    public $timestamps = false; //tambah ini kalau tabel ada tanggal2nya
}


