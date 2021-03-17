<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class xiirplbController extends Controller
{
    public function index(){
    	
    	// mengambil data dari table xii rpl b
    	$murid = DB::table()->get();
 
    	// mengirim data xiirplb ke view index
    	return view('xiirplb', ['murid' => $murid]);

	}

	public function tambah(){

		return view('tambah');

	}

	// method untuk insert data ke table murid
	public function store(Request $request){
		// insert data ke table murid
		DB::table('murid')->insert([
			'nisn' => $request->nisn,
			'nama' => $request->nama,
			'jenis_kelamin' => $request->jenis_kelamin,
			'alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman xii rpl b
		return redirect('xiirplb/siswa');
	 
	}

	// method untuk update data murid
	public function update($nisn)
	{
		// mengambil data murid berdasarkan nisn yang dipilih
		$murid = DB::table('murid')->where('nisn',$nisn)->get();
		// passing data murid yang didapat ke view update.blade.php
		return view('update',['murid' => $murid], ['nisn' => $nisn]);
	 
	}

	// update data murid
	public function edit(Request $request)
	{
		// edit data murid
		DB::table('murid')->where('nisn', $request->nisn)->update([
			'nama' => $request->nama,
			'jenis_kelamin' => $request->jenis_kelamin,
			'alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman murid
		return redirect('xiirplb/siswa');
	}

	// method untuk hapus data murid
	public function delete($id)
	{
		// menghapus data murid berdasarkan id yang dipilih
		DB::table('murid')->where('nisn', $id)->delete();
			
		// alihkan halaman ke halaman murid
		return redirect('xiirplb/siswa');
	}
}