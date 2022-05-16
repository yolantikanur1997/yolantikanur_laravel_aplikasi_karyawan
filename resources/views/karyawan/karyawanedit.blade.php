@extends('layout.main')

@section('container')
<!-- table -->
<div class="card">
  <div class="card-header" style="width:100%;">
  Edit Data Karyawan
  </div>
  @if(session()->has('Sukses'))
  <div class="alert alert-success mt-2 mr-3 ml-3" role="alert">
  {{ session('Sukses') }}
</div>
  @endif
  <div class="card-body">
  <div class="form-group">
      <div class="row">
      <form method="POST" action="{{ url('karyawann/update', $karyawann->id ) }}">
      {{ csrf_field() }}
        <div class="row">
          <div class="col-sm-6">
      <div class="form-group">
        <label>NIK</label>
        <input type="text" class="form-control" name="nik" id="nik" value="{{ $karyawann->nik }}">
      </div>
        </div>
        <div class="col-sm-6">
      <div class="form-group">
        <label>Nama Depan</label>
        <input type="text" class="form-control" name="nama_depan" id="nama_depan" value="{{ $karyawann->nama_depan }}">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Nama Belakang</label>
        <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" value="{{ $karyawann->nama_belakang }}">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <!-- <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $karyawann->jenis_kelamin }}"> -->
        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
          <option value="Perempuan"{{ $karyawann->jenis_kelamin=="perempuan" ? 'selected' : ''}}>Perempuan</option>
          <option value="Laki-Laki"{{ $karyawann->jenis_kelamin=="Laki-Laki" ? 'selected' : ''}}>Laki-Laki</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Divisi</label>
        <select class="form-control" name="divisi" id="divisi">
          <option value="Digital Marketing"{{ $karyawann->divisi=="Digital Marketing" ? 'selected' : ''}}>Digital Marketing</option>
          <option value="Keuangan"{{ $karyawann->divisi=="Keuangan" ? 'selected' : ''}}>Keuangan</option>
          <option value="General Affair"{{ $karyawann->divisi=="General Affair" ? 'selected' : ''}}>General Affair</option>
          <option value="Desain Grafis"{{ $karyawann->divisi=="Desain Grafis" ? 'selected' : ''}}>Desain Grafis</option>
          <option value="Human Resources"{{ $karyawann->divisi=="Human Resources" ? 'selected' : ''}}>Human Resources</option>
          <option value="IT"{{ $karyawann->divisi=="IT" ? 'selected' : ''}}>IT</option>
          <option value="Penjualan"{{ $karyawann->divisi=="Penjualan" ? 'selected' : ''}}>Penjualan</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Jabatan</label>
        <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ $karyawann->jabatan }}">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Level</label>
        <select class="form-control" name="level" id="level">
          <option value="Staff"{{ $karyawann->level=="Staff" ? 'selected' : ''}}>Staff</option>
          <option value="Manager"{{ $karyawann->level=="Manager" ? 'selected' : ''}}>Manager</option>
          <option value="General Manager"{{ $karyawann->level=="General Manager" ? 'selected' : ''}}>General Manager</option>
          <option value="Direktur"{{ $karyawann->level=="Direktur" ? 'selected' : ''}}>Direktur</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" class="form-control" name="no_telepon" id="no_telepon" value="{{ $karyawann->no_telepon }}">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $karyawann->tanggal_lahir }}">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $karyawann->tempat_lahir }}">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Pendidikan Terakhir</label>
        <select class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir">
          <option value="SD"{{ $karyawann->pendidikan_terakhir=="SD" ? 'selected' : ''}}>SD</option>
          <option value="SMP"{{ $karyawann->pendidikan_terakhir=="SMP" ? 'selected' : ''}}>SMP</option>
          <option value="SMA"{{ $karyawann->pendidikan_terakhir=="SMA" ? 'selected' : ''}}>SMA</option>
          <option value="D1"{{ $karyawann->pendidikan_terakhir=="D1" ? 'selected' : ''}}>D1</option>
          <option value="D2"{{ $karyawann->pendidikan_terakhir=="D2" ? 'selected' : ''}}>D2</option>
          <option value="D3"{{ $karyawann->pendidikan_terakhir=="D3" ? 'selected' : ''}}>D3</option>
          <option value="D4"{{ $karyawann->pendidikan_terakhir=="D4" ? 'selected' : ''}}>D4</option>
          <option value="S1"{{ $karyawann->pendidikan_terakhir=="S1" ? 'selected' : ''}}>S1</option>
          <option value="S2"{{ $karyawann->pendidikan_terakhir=="S2" ? 'selected' : ''}}>S2</option>
          <option value="S3"{{ $karyawann->pendidikan_terakhir=="S2" ? 'selected' : ''}}>S2</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Institusi Pendidikan</label>
        <input type="text" class="form-control" name="institusi_pendidikan" id="institusi_pendidikan" value="{{ $karyawann->institusi_pendidikan }}">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Jurusan</label>
        <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{ $karyawann->jurusan }}">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Kewarganegaraan</label>
        <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
          <option value="WNI"{{ $karyawann->kewarganegaraan=="WNI" ? 'selected' : ''}}>WNI</option>
          <option value="WNA"{{ $karyawann->kewarganegaraan=="WNA" ? 'selected' : ''}}>WNA</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Tanggal Masuk</label>
        <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" value="{{ $karyawann->tanggal_masuk }}">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status" id="status">
          <option value="Menikah"{{ $karyawann->status=="Menikah" ? 'selected' : ''}}>Menikah</option>
          <option value="Belum Menikah"{{ $karyawann->status=="Belum Menikah" ? 'selected' : ''}}>Belum Menikah</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ $karyawann->email }}">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Agama</label>
        <select class="form-control" name="agama" id="agama">
          <option value="Islam"{{ $karyawann->agama=="Islam" ? 'selected' : ''}}>Islam</option>
          <option value="Kristen"{{ $karyawann->agama=="Kristen" ? 'selected' : ''}}>Kristen</option>
          <option value="Katolik"{{ $karyawann->agama=="Katolik" ? 'selected' : ''}}>Katolik</option>
          <option value="Budha"{{ $karyawann->agama=="Budha" ? 'selected' : ''}}>Budha</option>
          <option value="Hindu"{{ $karyawann->agama=="Hindu" ? 'selected' : ''}}>Hindu</option>
          <option value="Konghucu"{{ $karyawann->agama=="Konghucu" ? 'selected' : ''}}>Konghucu</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Golongan Darah</label>
        <input type="text" class="form-control" name="golongan_darah" id="golongan_darah" value="{{ $karyawann->golongan_darah  }}">
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control">{{ $karyawann->alamat }}</textarea>
      </div>
      </div>
      </div>
      <button class="btn btn-primary" type="submit">Ubah</button>

	</form>

  </div>
</div>


<!-- table -->
@endsection


