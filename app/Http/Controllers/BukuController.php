<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Lokasi;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();   
        $buku->transform(function ($item){
           if($item->lokasi){
                $lokasi=$item->lokasi->lokasi;
           }else{$lokasi="Belum Disimpan";
        }
        $item->lokasiBuku=$lokasi;
        return $item;
        });
        return view("buku.buku", ['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lokasi=Lokasi::all();
        return view("buku.tambah", ['lokasi' => $lokasi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        buku::create([
            'judul_buku' => $request -> judul_buku,
            'pengarang' => $request -> pengarang,
            'penerbit' => $request -> penerbit,
            'tahun_terbit' => $request -> tahun_terbit,
            'id_lokasi' => $request -> id_lokasi
        ]);
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lokasi=Lokasi::all();
        $buku = Buku::where('id', $id)->firstOrFail();
        return view("buku.edit", compact('buku', 'lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buku = Buku::findOrFail($id);
        //Update Data
        $buku ->judul_buku = $request->judul_buku;
        $buku ->pengarang = $request->pengarang;
        $buku ->penerbit = $request->penerbit;
        $buku ->tahun_terbit = $request->tahun_terbit;
        $buku ->id_lokasi = $request->id_lokasi;    
        $buku ->save();
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Buku::where('id', $id)->delete();
        return redirect('/buku');
        
    }
}
