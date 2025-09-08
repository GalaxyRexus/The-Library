@extends('master')
@section('isi')
     <div class="container">
        <h3>Edit Lokasi {{ old('lokasi_rak', $lokasi->lokasi_rak) }}</h3>
       <div class="card">
  <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
    <span>Form Edit Lokasi Rak</span>
  </div>
  <div class="card-body">
    <form method="POST" action="/lokasi/update/{{ $lokasi->id }}">
      @csrf
      <div class="mb-3">
        <label for="kode_buku" class="form-label">Nama Lokasi</label>
        <input type="text" class="form-control" id="nama_lokasi" name="lokasi_rak" required value="{{ old('lokasi_rak', $lokasi->lokasi_rak) }}">
      </div>
      <div class="mb-3">
        <label for="nama_buku" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi" id="deskripsi" rows="3" required value="{{ old('deskripsi', $lokasi->deskripsi) }}"></input>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="/lokasi" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
    </div>
     </div>
@endsection