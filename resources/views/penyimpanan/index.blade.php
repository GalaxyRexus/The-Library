@extends('master')
@section('isi')
     <div class="container"></div>
    <h3>Ini Adalah Halaman Lokasi Rak</h3>
    <div class="card">
  <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
    <span>Tabel Lokasi Rak</span>
    <a href="/buku/tambah" class="btn btn-outline-success btn-sm text-white">Tambah</a>
  </div>
  <div class="table-responsive px-3 py-3">
  <table class="table table-striped" id="datatablesSimple">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Lokasi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($buku as $item )
    <tr>
        <th scope="row">{{ $item -> id }}</th>
        <td>{{ $item -> judul_buku }}</td>
        <td>{{ $item -> pengarang }}</td>
        <td>{{ $item -> penerbit }}</td>
        <td>{{ $item -> tahun_terbit }}</td>
        <td> </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
    </div>
@endsection