<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_lokasi', function (Blueprint $table) {
            $table->id()-> primary();
            $table->string('lokasi_rak');
            $table->string('deskripsi');
        });
        Schema::create('tb_buku', function (Blueprint $table) {
            $table->id()-> primary();
            $table->string('judul_buku');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->integer('tahun_terbit');
            $table->integer('id_lokasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_create');
    }
};
