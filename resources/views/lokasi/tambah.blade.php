@extends('master')
@section('isi')
     <div class="container">
       <div class="card">
  <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
    <span>Form Tambah Lokasi Rak</span>
  </div>
  <div class="card-body">
    <form action="/lokasi/simpan" method="POST">
      @csrf
      <div class="mb-3">
        <label for="kode_buku" class="form-label">Nama Lokasi</label>
        <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" required>
      </div>
      <div class="mb-3">
        <label for="nama_buku" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="/lokasi" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
    </div>
     </div>
@endsection