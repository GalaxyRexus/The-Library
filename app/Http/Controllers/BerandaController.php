<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Lokasi;

class BerandaController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        $totalBuku = Buku::count();
        $bukuTersimpan = Buku::whereHas('lokasi')->count();
        $jumlahLokasi = Lokasi::count();
        $bukuBelumTersimpan = Buku::doesntHave('lokasi')->count();

        return view('beranda', compact('buku','totalBuku', 'bukuTersimpan', 'jumlahLokasi', 'bukuBelumTersimpan', ));
    }
}