<?php

use App\Http\Controllers\MasterController;
//Memanggil Controller
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenyimpananController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index']);


Route::get('/lokasi', [LokasiController::class, 'index']);
Route::get('/lokasi/tambah', [LokasiController::class, 'create']);
Route::post('/lokasi/store', [LokasiController::class, 'store']);
Route::get('/lokasi/delete/{id}', [LokasiController::class, 'destroy']);
Route::get('/lokasi/edit/{id}', [LokasiController::class, 'edit']);
Route::post('/lokasi/update/{id}', [LokasiController::class, 'update']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/tambah', [BukuController::class, 'create']);
Route::post('/buku/store', [BukuController::class,'store']);
Route::get('/buku/delete/{id}', [BukuController::class, 'destroy']);
Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::post('/buku/update/{id}', [BukuController::class, 'update']); 

//Routing Halaman Penyimpnanan Buku
Route::get('/penyimpanan', [PenyimpananController::class, 'index']);