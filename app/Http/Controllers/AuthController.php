<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        return view('back.login');
    }

    public function loginproses(Request $request)
    {
       if(Auth::attempt($request->only('email','password'))){
        return redirect('/dashboard');
       }

       return redirect('login');
    }

    public function register()
    {
        return view('back.register');
    }

    public function registerproses(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => str::random(60)
        ]);
        return redirect('/login')->with('pesan','selamat data sudah berhasil masuk silahkan cek email verifikasi anda...!!!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
