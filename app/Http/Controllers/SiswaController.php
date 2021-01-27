<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class SiswaController extends Controller
{
	public function formulir(){
		return view('formulir');
	}

	public function proses(Request $request){
    	$nama = $request->input('nama');
     	$kelas = $request->input('kelas');
     	$alamat = $request->input('alamat');
     	$agama = $request->input('agama');
     	$tempatLahir = $request->input('tempatLahir');
     	$tglLahir = $request->input('tglLahir');

     	return view('biodataSiswa', ['nama' => $nama, 
     								'kelas' => $kelas, 
     								'alamat' => $alamat,
     								'agama' => $agama,
     								'tempatLahir' => $tempatLahir,
     								'tglLahir' => $tglLahir
     							]);

	}
}