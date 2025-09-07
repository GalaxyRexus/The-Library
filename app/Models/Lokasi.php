<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    protected $table = "tb_lokasi";
    protected $fillable = ['lokasi_rak', 'deskripsi'];
}
