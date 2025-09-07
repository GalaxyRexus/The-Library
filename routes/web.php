<?php

use App\Http\Controllers\MasterController;
//Memanggil Controller
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/lokasi', [LokasiController::class, 'index']);
Route::get('/lokasi/tambah', [LokasiController::class, 'create']);
Route::get('/lokasi/delete/{id}', [LokasiController::class, 'destroy']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/tambah', [BukuController::class, 'create']);
Route::get('/buku/delete/{id}', [BukuController::class, 'destroy']);
