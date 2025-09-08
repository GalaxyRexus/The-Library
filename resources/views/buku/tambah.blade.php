@extends('master')
@section('isi')
     <div class="container">
       <div class="card">
  <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
    <span>Form Tambah Buku</span>
  </div>
  <div class="card-body">
    <form action="/buku/store" method="POST">
      @csrf
      <div class="mb-3">
        <label for="kode_buku" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" id="judul_buku" name="judul_buku" required>
      </div>
      <div class="mb-3">
        <label for="kode_buku" class="form-label">Pengarang</label>
        <input type="text" class="form-control" id="pengarang" name="pengarang" required>
      </div>
      <div class="mb-3">
        <label for="kode_buku" class="form-label">Penerbit</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" required>
      </div>
      <div class="mb-3">
        <label for="nama_buku" class="form-label">Tahun Terbit</label>
        <input type="number" class="form-control form-control-sm w-25" id="tahun_terbit" name="tahun_terbit" required>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="/buku" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
    </div>
     </div>
@endsection