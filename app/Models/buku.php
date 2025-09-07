<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = "tb_buku";
    protected $fillable = ['judul_buku', 'pengarang', 'penerbit', 'tahun_terbit'];
}
