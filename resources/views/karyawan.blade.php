@extends('layout.main')

@section('container')
<!-- table -->
<div class="card">
  <div class="card-header" style="width:100%;">
  {{ $title }}
  </div>
  @if(session()->has('Sukses'))
  <div class="alert alert-success mt-2 mr-3 ml-3" role="alert">
  {{ session('Sukses') }}
</div>
  @endif
  @if(session()->has('Hapus'))
  <div class="alert alert-danger mt-2 mr-3 ml-3" role="alert">
  {{ session('Hapus') }}
</div>
  @endif
  @if(session()->has('Edit'))
  <div class="alert alert-warning mt-2 mr-3 ml-3" role="alert">
  {{ session('Edit') }}
</div>
  @endif
  <div class="card-body">
  <div class="form-group">
      <div class="row">
        <div class="col-sm-6">
  <form action="/karyawann/cari" method="GET">
      <input type="text" class="form-control" name="cari" id="cari" placeholder="Masukan Nama Karyawan" value="{{ old('cari') }}" style="width: 100%;">
        </div>
      <div class="col-sm-2">
      <button type="submit" class="btn btn-outline-info"><i class="fa-solid fa-magnifying-glass"></i></button>    
        </div>
	</form>
  <div class="col-sm-4">
      <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#karyawanModal"><i class="fa-solid fa-plus"></i></button>    
      <a href="/karyawann"><button class="btn btn-outline-success float-right"><i class="fa-solid fa-arrows-rotate"></i></button>    </a>
        </div>
  </div>
</div>
  <table class="table table-bordered table-striped text-center">
  <tr>
    <th>#</th>
    <th>NIK</th>
    <th>Nama Depan</th>
    <th>Divisi</th>
    <th>Jabatan</th>
    <th>Level</th>
    <th>Aksi</th>
  </tr>

  @foreach($karyawann as $index => $k) 
  <tr>
    <th>{{ $karyawann->firstItem() + $index }}</th>
    <td>{{ $k->nik }}</td>
    <td>{{ $k->nama_depan }}</td>
    <td>{{ $k->divisi }}</td>
    <td>{{ $k->jabatan }}</td>
    <td>{{ $k->level }}</td>
    <td>
      <a href="/karyawann/lihat/{{ $k->id }}"  title="Lihat Data" ><button class="badge bg-warning border-0 pt-2 pb-2 pl-2 pr-2">
        <i class="fa-solid fa-eye"></i></button></a>
        <a href="/karyawann/edit/{{ $k->id }}" title="Edit"><button class="badge bg-success border-0 pt-2 pb-2 pl-2 pr-2">
        <i class="fa-solid fa-pencil" style="color:white"></i></button></a>
        <a href="/karyawann/hapus/{{ $k->id }}" title="Hapus"><button class="badge bg-danger border-0 pt-2 pb-2 pl-2 pr-2" onclick="return confirm('Yakin ingin menghapus data?')">
        <i class="fa-solid fa-circle-minus" style="color:white"></i></button></a>
    </td>
  </tr>
  @endforeach
</table>
  
<!-- Current Page: {{ $karyawann->currentPage() }}<br> -->
        Jumlah Semua Data Karyawan: {{ $karyawann->total() }}<br>
        <!-- Data perhalaman: {{ $karyawann->perPage() }}<br> -->
        <br>
        {{ $karyawann->links() }}
  </div>
</div>
@include('karyawan.karyawanform')
@endsection


