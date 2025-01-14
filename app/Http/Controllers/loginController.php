<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba autentikasi pengguna
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('dashboard2'); // Halaman setelah login sukses
        }

        // Jika gagal login
        return back()->withErrors(['email' => 'Email atau password salah']);
    }
}
