<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    protected $table = "tb_lokasi"; //Ini Untuk Validasi Tabel
    public $timestamps = false; //Untuk Menonaktifkan Timestamps (Agar Tidak Error Update At Dll)
    protected $fillable = ['lokasi_rak', 'deskripsi']; //Validasi Field Kolomnya Apa Saja
}
