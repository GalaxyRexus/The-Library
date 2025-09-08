@extends('master')
@section('isi')
    <div class="container">
        <h3>Beranda</h3>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body fs-3">RAK 7</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="/lokasi">Selengkapnya</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body fs-3">BUKU 12</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="/buku">Selengkapnya</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body fs-3">KATEGORI 4</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Selengkapnya</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body fs-3">PENGUNJUNG 168</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Selengkapnya</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
  <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
    <span>Buku Terbaru</span>
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
    </tr>
  </thead>
  <tbody>
    @foreach ($buku as $item )
    <tr>
        <th scope="row">{{ $item -> id }}</th>
        <td>{{ $item ->judul_buku }}</td>
        <td>{{$item -> pengarang }}</td>
        <td>{{ $item -> penerbit }}</td>
        <td>{{ $item -> tahun_terbit }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
    </div>
    </div>

@endsection