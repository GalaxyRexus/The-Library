<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Lokasi;

class PenyimpananController extends Controller
{
    public function index()
    {
        
        // Pakai eager loading biar hemat query
        $buku = Buku::with('lokasi')->get();
        $penyimpanan = Buku::join('tb_lokasi', 'tb_buku.id_lokasi', '=', 'tb_lokasi.id')
        ->get();
        return view('penyimpanan.index', compact('buku'));
    }

   public function edit(string $id)
   {
      $buku = Buku::where('id', $id)->firstOrFail();
      $lokasi = Lokasi::all();
      return view("penyimpanan.edit", compact('buku', 'lokasi'));
   }
}
