@extends('template.master')

@section('content')

<div class="content-wrapper">
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('anggota.store') }}" method="POST">
                @csrf
              <div class="card-body">
              <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Anggota</label>
                    <input type="text" class="form-control @error('kode') is-invalid @enderror " name="kode" placeholder="Input Kode Anggota">
                    @error('kode')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror " name="nama" placeholder="Input Nama Anggota">
                    @error('nama')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                        <label>Jenis Kelamin</label>
                        <select type="text" name="jk" class="form-control">
                          <option disabled selectdes>Jenis Kelamin</option>
                          <option value="P">Perempuan</option>
                          <option value="L">Laki-Laki</option>
                        </select>

                        <label>Jurusan</label>
                        <select type="text" name="jurusan" class="form-control">
                          <option disabled selectdes>Jurusan</option>
                          <option value="rpl">RPL</option>
                          <option value="tkj">TKJ</option>
                          <option value="dpib">DPIB</option>
                          <option value="dgm">DGM</option>
                          <option value="tm">TM</option>
                          <option value="tkro">TKRO</option>
                          <option value="tbsm">TBSM</option>
                          <option value="tei">TEI</option>
                          <option value="titl">TITL</option>
                          <option value="tflm">TFLM</option>
                          <option value="tpl">TPL</option>
                        </select>

                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="number" class="form-control @error('telp') is-invalid @enderror " name="telp" placeholder="Input No Telp Anggota">
                    @error('telp')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="exampleInputEmail1">Alamat Anggota</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror " name="alamat" placeholder="Input Alamat Anggota">
                    @error('alamat')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
                    <p>Apakah Anda Yakin Akan Keluar Dari Form Create Data Anggota?</p>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    <a href="{{ route('anggota.index') }}" class="btn btn-primary">Yes</a>
                  </div>
                </div>
              </div>
            </div>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}"></script>
@endsection