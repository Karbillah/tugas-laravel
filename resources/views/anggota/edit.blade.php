@extends('template.master')

@section('content')

<div class="content-wrapper">
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Form Detail Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('anggota.update', $anggotas[0]->id) }}" method="POST">
                @csrf
                @method('PUT')
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
                    <input type="text" class="form-control" name="kode" value="{{ $anggotas[0]->kode_anggota }}">
                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <input type="text" class="form-control" name="nama" value="{{ $anggotas[0]->nama_anggota }}">
                        <label>Jenis Kelamin</label>
                        <select type="text" name="jk" class="form-control" value="{{ $anggotas[0]->jk_anggota }}">
                          <option selectdes>Jenis Kelamin</option>
                          <option value="P">Perempuan</option>
                          <option value="L">Laki-Laki</option>
                        </select>
                        <label>Jurusan</label>
                        <select type="text" name="jurusan" class="form-control" value="{{ $anggotas[0]->jurusan_anggota }}">
                          <option selectdes>Jurusan</option>
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
                    <input type="number" class="form-control" name="telp" value="{{ $anggotas[0]->no_telp_angggota }}">
                    <label for="exampleInputEmail1">Alamat Anggota</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $anggotas[0]->alamat_anggota }}">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update</button>
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
                    <p>Apakah Anda Yakin Akan Keluar Dari Form Edit Data Anggota?</p>
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