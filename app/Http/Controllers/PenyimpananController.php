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
        $buku = buku::all();
         $buku->transform(function ($item){
           if($item->lokasi){
                $lokasi=$item->lokasi->lokasi;
           }else{$lokasi="Belum Disimpasssssss  n";
        }
        $item->lokasiBuku=$lokasi;
        return $item;
        });
        
        return view('penyimpanan.index', compact('buku'));
    }
}
