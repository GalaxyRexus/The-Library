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
        <label for="judul_buku" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" id="judul_buku" name="judul_buku" required>
      </div>
      <div class="mb-3">
        <label for="pengarang" class="form-label">Pengarang</label>
        <input type="text" class="form-control" id="pengarang" name="pengarang" required>
      </div>
      <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" required>
      </div>
      <div class="mb-3">
        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
        <input type="number" class="form-control form-control-sm w-25" id="tahun_terbit" name="tahun_terbit" required>
      </div>
      <div class="mb-3">
        <label for="id_lokasi" class="form-label">Lokasi Rak</label>
        <select class="form-control form-control-sm w-25" id="id_lokasi" name="id_lokasi" required>
          <option value="">--Pilih Lokasi Rak--</option>
          @foreach ($lokasi as $item)
          <option value="{{ $item->id }}">{{ $item->lokasi_rak }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="/buku" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
    </div>
     </div>
@endsection