<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class PenyimpananController extends Controller
{
    public function index()
    {
        // Pakai eager loading biar hemat query
        $buku = Buku::with('lokasi')->get();

        return view('penyimpanan.index', compact('index'));
    }
}
