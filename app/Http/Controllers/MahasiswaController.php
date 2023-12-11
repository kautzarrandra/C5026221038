<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table mahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();
    	// mengirim data mahasiswa ke view index
		return view('index4',['mahasiswa' => $mahasiswa]);

	}

	// method untuk edit data mahasiswa
	public function edit($id)
	{
		// mengambil data mahasiswa berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		// passing data mahasiswa yang didapat ke view edit2.blade.php
		return view('edit2',['mahasiswa' => $mahasiswa]);

	}

    // method untuk lihat data mahasiswa
	public function view($id)
	{
		// mengambil data mahasiswa berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		// passing data mahasiswa yang didapat ke view edit2.blade.php
		return view('view1',['mahasiswa' => $mahasiswa]);

	}

	// update data mahasiswa
	public function update(Request $request)
	{
		// update data mahasiswa
		DB::table('mahasiswa')->where('NRP',$request->id)->update([
			'NRP' => $request->nrp,
			'Nama' => $request->nama,
			'Jurusan' => $request->jurusan,
			'IPK' => $request->ipk
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mahasiswa');
	}
}
