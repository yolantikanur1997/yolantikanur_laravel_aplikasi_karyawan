<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index(){
         
		$data = Karyawan::orderBy('created_at', 'desc')->paginate(10);                        
        return view('karyawan',['title' => 'Semua Data Karyawan', 'karyawann' => $data]);    
    }

    public function cari(Request $request)
	{
	
		$cari = $request->cari;
 
		$karyawan = DB::table('karyawan')
		->where('nama_depan','like',"%".$cari."%")
		->paginate();
		return view('karyawan',['karyawann' => $karyawan]);
	}

	public function tambah(Request $request)
	{
	
		$validateData = $request->validate([
			'nik' => 'required|numeric',
			'nama_depan' => 'required',
			'nama_belakang' => 'required',
			'jenis_kelamin' => 'required',
			'divisi' => 'required',
			'jabatan' => 'required',
			'level' => 'required',
			'no_telepon' => 'required|numeric',
			'tanggal_lahir' => 'required',
			'tempat_lahir' => 'required',
			'pendidikan_terakhir' => 'required',
			'institusi_pendidikan' => 'required',
			'jurusan' => 'required',
			'kewarganegaraan' => 'required',
			'tanggal_masuk' => 'required',
			'status' => 'required',
			'email' => 'email:rfc,dns',
			'agama' => 'required',
			'golongan_darah' => 'required',
			'alamat' => 'required'
		]);

		Karyawan::create($validateData);

		return redirect('karyawann')->with('Sukses', 'Data Karyawan Berhasil Tersimpan');
	}

	public function hapus($id)
	{

			DB::table('Karyawan')->where('id',$id)->delete();
			return redirect('karyawann')->with('Hapus', 'Data Karyawan Dihapus');

	}

	public function edit($id)
	{
		$karyawan = Karyawan::findOrFail($id);
		return view('karyawan.karyawanedit',['karyawann' => $karyawan]);
	}
	public function lihat($id)
	{
		

		$karyawan = Karyawan::findOrFail($id);
		return view('karyawan.karyawanlihat',['karyawann' => $karyawan, 'title' => "Data Karyawan"]);
	}

	public function update(Request $request, $id)
	{		
		$karyawan = Karyawan::find($id)->update($request->all()); 
				
		return redirect('karyawann')->with('Edit', 'Data Karyawan Diedit');
		// return view('karyawan',['karyawann' => $karyawan]);
	}
}
	
