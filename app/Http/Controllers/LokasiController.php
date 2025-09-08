<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;

class LokasiController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all();
        //Passing data ke view
        return view("lokasi.lokasi_rak", ['lokasi' => $lokasi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("lokasi.tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Simpan Ke Database
        Lokasi::create([
            'lokasi_rak' => $request->lokasi_rak,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/lokasi');
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
       $lokasi = Lokasi::where('id', $id)->firstOrFail();
         return view("lokasi.edit", compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Lokasi::where('id', $id)->delete();
        return redirect('/lokasi');
    }
}
