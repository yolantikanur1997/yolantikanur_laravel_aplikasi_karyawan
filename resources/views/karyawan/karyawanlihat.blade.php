@extends('layout.main')

@section('container')
<!-- table -->
<div class="card">
  <div class="card-header" style="width:100%;">
  {{ $title }}
  </div>
  <div class="card-body" style="font-size: 16px ;">
    <div class="row">
      <div class="col-sm-12">
      <table class="table">

    <tr>
      <th>NIK</th>
      <td>{{ $karyawann->nik }}</td>
      <th>Nama Depan | Nama Belakang</th>
      <td>{{ $karyawann->nama_depan }} {{ $karyawann->nama_belakang }}</td>
    </tr>
    <tr>
      <th>Jenis Kelamin</th>
      <td>{{ $karyawann->jenis_kelamin }}</td>
      <th>Divisi</th>
      <td>{{ $karyawann->divisi }}</td>
    </tr>
    <tr>
      <th>Jabatan</th>
      <td>{{ $karyawann->jabatan }}</td>
      <th>Level</th>
      <td>{{ $karyawann->level }}</td>
    </tr>
    <tr>
      <th>Nomor Telepon</th>
      <td>{{ $karyawann->no_telepon }}</td>
      <th>Tanggal Lahir</th>
      <td>{{ $karyawann->tanggal_lahir }}</td>
    </tr>
    <tr>
      <th>Tempat Lahir</th>
      <td>{{ $karyawann->tempat_lahir }}</td>
      <th>Pendidikan Terakhir</th>
      <td>{{ $karyawann->pendidikan_terakhir }}</td>
    </tr>
    <tr>
      <th>Institusi Pendidikan</th>
      <td>{{ $karyawann->institusi_pendidikan }}</td>
      <th>Jurusan</th>
      <td>{{ $karyawann->jurusan }}</td>
    </tr>
    <tr>
      <th>Kewarganegaraan</th>
      <td>{{ $karyawann->kewarganegaraan }}</td>
      <th>Tanggal Masuk</th>
      <td>{{ $karyawann->tanggal_masuk }}</td>
    </tr>
    <tr>
      <th>Status</th>
      <td>{{ $karyawann->status }}</td>
      <th>Email</th>
      <td>{{ $karyawann->email }}</td>
    </tr>
    <tr>
      <th>Agama</th>
      <td>{{ $karyawann->agama }}</td>
      <th>Golongan Darah</th>
      <td colspan="3">{{ $karyawann->golongan_darah }}</td>
    </tr>
    <tr>
      <th>Alamat</th>
      <td colspan="3">{{ $karyawann->alamat }}</td>
    </tr>
</table>


    </div>
  </div>

</div>



@endsection


