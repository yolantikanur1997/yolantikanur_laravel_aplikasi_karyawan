<!-- Modal Tambah Data-->
<div class="modal fade" id="karyawanModal" tabindex="-1" role="dialog" aria-labelledby="karyawanModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="karyawanModalLabel">Tambah Data Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="karyawann/tambah">
      {{ csrf_field() }}
        <div class="row">
          <div class="col-sm-6">
      <div class="form-group">
        <label>NIK</label>
        <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik">
        @error('nik')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
        </div>
        <div class="col-sm-6">
      <div class="form-group">
        <label>Nama Depan</label>
        <input type="text" class="form-control @error('nama_depan') is-invalid @enderror" name="nama_depan" id="nama_depan">
        @error('nama_depan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Nama Belakang</label>
        <input type="text" class="form-control @error('nama_belakang') is-invalid @enderror" name="nama_belakang" id="nama_belakang">
        @error('nama_belakang')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
          <option value="Perempuan">Perempuan</option>
          <option value="Laki-Laki">Laki-Laki</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Divisi</label>
        <select class="form-control" name="divisi" id="divisi">
          <option value="Digital Marketing">Digital Marketing</option>
          <option value="Keuangan">Keuangan</option>
          <option value="General Affair">General Affair</option>
          <option value="Desain Grafis">Desain Grafis</option>
          <option value="Human Resources">Human Resources</option>
          <option value="IT">IT</option>
          <option value="Penjualan">Penjualan</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Jabatan</label>
        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" id="jabatan">
        @error('jabatan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Level</label>
        <select class="form-control" name="level" id="level">
          <option value="Staff">Staff</option>
          <option value="Manager">Manager</option>
          <option value="General Manager">General Manager</option>
          <option value="Direktur">Direktur</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" id="no_telepon">
        @error('no_telepon')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir">
        @error('tanggal_lahir')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="tempat_lahir">
        @error('tempat_lahir')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Pendidikan Terakhir</label>
        <select class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir">
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA">SMA</option>
          <option value="D1">D1</option>
          <option value="D2">D2</option>
          <option value="D3">D3</option>
          <option value="D4">D4</option>
          <option value="S1">S1</option>
          <option value="S2">S2</option>
          <option value="S3">S3</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Institusi Pendidikan</label>
        <input type="text" class="form-control @error('institusi_pendidikan') is-invalid @enderror" name="institusi_pendidikan" id="institusi_pendidikan">
        @error('institusi_pendidikan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Jurusan</label>
        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan">
        @error('jurusan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Kewarganegaraan</label>
        <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
          <option value="WNI">WNI</option>
          <option value="WNA">WNA</option>
        </select>
        @error('kewarganegaraan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Tanggal Masuk</label>
        <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" id="tanggal_masuk">
        @error('tanggal_masuk')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status" id="status">
          <option value="Menikah">Menikah</option>
          <option value="Belum Menikah">Belum Menikah</option>
        </select>
      </div>
      </div>      
      <div class="col-sm-6">
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Agama</label>
        <select class="form-control" name="agama" id="agama">
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Katolik">Katolik</option>
          <option value="Budha">Budha</option>
          <option value="Hindu">Hindu</option>
          <option value="Konghucu">Konghucu</option>
        </select>
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label>Golongan Darah</label>
        <input type="text" class="form-control @error('golongan_darah') is-invalid @enderror" name="golongan_darah" id="golongan_darah">
        @error('golongan_darah')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div> 
      <div class="col-sm-6">
      <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
       @error('alamat')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      </div>
    
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
      </form>
    </div>
  </div>
</div>
