<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function inputPemudik()
    {
        // mengambil data dari table pegawai
		$data = DB::table('moda_transpotasi')->paginate(10);
        //DD($res);
    	// mengirim data pegawai ke view index
		return view('inputpemudik',['data' => $data]);
     
    }
      
    public function storePemudik(Request $request)
    {
        DB::table('penumpang')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
			'moda' => $request->moda,
			'tujuan' => $request->tujuan,
			'tgl' => $request->tgl
		]);

        return redirect()->back()->with('pesan','Inputan anda telah masuk silahkan cek email anda untuk melihat kode booking...!!!');
    }
       
    public function cekveriFikasi()
    {
        $cek = DB::table('penumpang')->where('status_verifikasi','=',1)->get();
        return view('front.cekverifikasi',['cek' => $cek]);
    }

    public function cetakTiket($id)
    {
        $cetak = DB::table('penumpang')->where('id', $id)->get();
        return view('front.cetaktiket',['cetak' => $cetak]);
    }

    
    
}
