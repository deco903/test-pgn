<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserApiController extends Controller
{
    public function storePemudik(Request $request)
    {
        DB::table('moda_transpotasi')->insert([
			'moda' => $request->moda,
			'rute' => $request->rute,
			'jadwal' => $request->jadwal
		]);

        return 'data berhasil masuk';
    }
}
