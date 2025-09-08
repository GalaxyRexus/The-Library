@extends('master')
@section('isi')
     <div class="container"></div>
    <h3>Ini Adalah Halaman Lokasi Rak</h3>
    <div class="card">
  <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
    <span>Tabel Lokasi Rak</span>
    <a href="/lokasi/tambah" class="btn btn-outline-success btn-sm text-white">Tambah</a>
  </div>
  <div class="table-responsive px-3 py-3">
  <table class="table table-striped" id="datatablesSimple">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lokasi Rak</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($lokasi as $item)
    <tr>
      <th scope="row">{{ $loop -> iteration}}</th>
      <td>{{ $item -> lokasi_rak }}</td>
      <td>{{ $item -> deskripsi }}</td>
      <td><a type="button" href="/lokasi/edit/{{ $item -> id }}" class="btn btn-warning">Edit</a>
      <a href="/lokasi/delete/{{ $item -> id }}" type="button" class="btn btn-danger"
      onclick="return confirm('Yakin Ingin Menghapus Data Ini ?')">Delete</a>
    </td>
    </tr>
     @endforeach
  </tbody>
</table>
</div>
    </div>
@endsection