<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lokasi;

class buku extends Model
{
    protected $table = "tb_buku";
    public $timestamps = false;
    protected $fillable = ['judul_buku', 'pengarang', 'penerbit', 'tahun_terbit','id_lokasi'];

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'id');
    }
}
