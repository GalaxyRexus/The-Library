@extends('master')
@section('isi')
    <div class="container">
        <h3>Beranda</h3>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body fs-3">RAK 7</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body fs-3">BUKU 12</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body fs-3">KATEGORI 4</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body fs-3">PENGUNJUNG 168</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
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
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Negeri 5 Menara</td>
        <td>A. Fuadi</td>
        <td>Gramedia</td>
        <td>2009</td>
        <td><button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Hamlet</td>
        <td>William Shakespeare</td>
        <td>Penguin</td>
        <td>1968</td>
        <td><button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Aenias</td>
        <td>Vergilius Publius Maro</td>
        <td>Penguin</td>
        <td>1894</td>
        <td><button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Inferno</td>
        <td>Dante Alighieri</td>
        <td>Penguin</td>
        <td>1932</td>
        <td><button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
    </tr>
    <tr>
        <th scope="row">5</th>
        <td>Purgatorio</td>
        <td>Dante Alighieri</td>
        <td>Penguin</td>
        <td>1954</td>
        <td><button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
    </tr>
    <tr>
        <th scope="row">6</th>
        <td>Paradiso</td>
        <td>Dante Alighieri</td>
        <td>Penguin</td>
        <td>1997</td>
        <td><button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
    </tr>
    <tr>
        <th scope="row">7</th>
        <td>Hakuchuumu No Aojashin</td>
        <td>Ono Wasabi</td>
        <td>Laplacian</td>
        <td>2019</td>
        <td><button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
    </tr>
  </tbody>
</table>
</div>
    </div>
    </div>

@endsection