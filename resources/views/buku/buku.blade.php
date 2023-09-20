  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css')}}">

<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Buku</h3>
              </div>

              <form>
              <div class="card-body">
              <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputKodeBuku1">Kode Buku</label>
                    <input type="KodeBuku" class="form-control" id="exampleInputKodeBuku1" placeholder="Enter Kode Buku">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputJudulBuku1">Judul Buku</label>
                    <input type="JudulBuku" class="form-control" id="exampleInputJudulBuku1" placeholder="Enter Judul Buku">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPenulisBuku1">Penulis Buku</label>
                    <input type="PenulisBuku" class="form-control" id="exampleInputPenulisBuku1" placeholder="Enter Penulis Buku">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPenerbitBuku1">Penerbit Buku</label>
                    <input type="PenerbitBuku" class="form-control" id="exampleInputPenerbitBuku1" placeholder="Enter Penerbit Buku">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTahunPenerbit1">Tahun Penerbit</label>
                    <input type="TahunPenerbit" class="form-control" id="exampleInputTahunPenerbit1" placeholder="Enter Tahun Penerbit">
                  </div>
                    <label for="exampleInputStok1">Stok</label>
                    <input type="stok" class="form-control" id="exampleInputStok1" placeholder="Enter Stok">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
                  <a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Kembali</a>
                </div>
              </form>
            </div>
            </div>

             <div class="modal" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Peringatan!!</h5>
                  </div>
                  <div class="modal-body">
                    <p>Apakah Anda Yakin Akan Keluar Dari Form Create Data Buku?</p>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    <a href="{{ route('anggota.index') }}" class="btn btn-primary">Yes</a>
                  </div>
                </div>
              </div>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}"></script>