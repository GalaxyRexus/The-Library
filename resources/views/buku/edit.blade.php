@extends('master')
@section('isi')
     <div class="container">
        <h3>Edit Buku {{ old('judul_buku', $buku->judul_buku) }}</h3>
       <div class="card">
  <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
    <span>Form Edit Lokasi Rak</span>
  </div>
  <div class="card-body">
    <form method="POST" action="/buku/update/{{ $buku->id }}">
      @csrf
      <div class="mb-3">
        <label for="kode_buku" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" id="judul_buku" name="judul_buku" required value="{{ old('judul_buku', $buku->judul_buku) }}">
      </div>
      <div class="mb-3">
        <label for="nama_buku" class="form-label">Pengarang</label>
        <input type="text" class="form-control" name="pengarang" id="pengarang" rows="3" required value="{{ old('pengarang', $buku->pengarang) }}"></input>
      </div>
      <div class="mb-3">
        <label for="nama_buku" class="form-label">Penerbit</label>
        <input type="text" class="form-control" name="penerbit" id="penerbit" rows="3" required value="{{ old('penerbit', $buku->penerbit) }}"></input>
      </div>
      <div class="mb-3">
        <label for="nama_buku" class="form-label">Tahun Terbit</label>
        <input type="number" class="form-control" name="tahun_terbit" id="tahun_terbit" rows="3" required value="{{ old('tahun_terbit', $buku->tahun_terbit) }}"></input>
      </div>
      <div class="mb-3">
        <label for="id_lokasi" class="form-label">Lokasi Rak</label>
        <select class="form-control form-control-sm w-25" id="id_lokasi" name="id_lokasi" required>
          <option value="">--Pilih Lokasi Rak--</option>
          @foreach ($lokasi as $item)
          <option value="{{ $item->id }}" {{ $buku->id_lokasi == $item->id ? 'selected' : '' }}>{{ $item->lokasi_rak }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
     <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
    </div>
     </div>
@endsection