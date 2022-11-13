<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function dashboard()
    {
        // mengambil data dari table pegawai
		$res = DB::table('moda_transpotasi')->paginate(10);
        //DD($res);
    	// mengirim data pegawai ke view index
		return view('back.dash',['res' => $res]);
        
    }

    public function store(Request $request)
    {
        // dd($request->all());
        DB::table('moda_transpotasi')->insert([
			'moda' => $request->moda,
			'rute' => $request->rute,
			'jadwal' => $request->jadwal
		]);

        return redirect ('/dashboard');
    }

    public function listPemudik()
    {
        // mengambil data dari table pegawai
		$list = DB::table('penumpang')->paginate(10);
        //DD($res);
    	// mengirim data pegawai ke view index
		return view('back.listpemudik',['list' => $list]);
    }

    public function editVerifikasi($id)
    {
        $list = DB::table('penumpang')->where('id',$id)->first();
        return view('back.editverifikasi',['list' => $list]);
    }

    public function updateVerifikasi(Request $request)
    {
        DB::table('penumpang')->where('id',$request->id)->update([
			'status_verifikasi' => $request->status_verifikasi
		]);
        return redirect('/listPemudik')->with('pesan','Pemudik telah diverivikasi');
    }

    public function editTransportasi($id)
    {
        $rubah = DB::table('moda_transpotasi')->where('id',$id)->first();
        return view('back.editTransport', ['rubah'=>$rubah]);
    }

    public function updateTransportasi(Request $request)
    {
        DB::table('moda_transpotasi')->where('id',$request->id)->update([
			'moda' => $request->moda,
			'rute' => $request->rute,
			'jadwal' => $request->jadwal
		]);
        return redirect('/dashboard');
    }

    public function hapusTransportasi($id)
    {
        DB::table('moda_transpotasi')->where('id',$id)->delete();
		
        return redirect('/dashboard');
    }

    public function daftarJumlah()
    {
        
        return view('back.daftarjumlah');
    }


}
