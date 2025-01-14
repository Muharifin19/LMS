<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Proses Sign Up (Register)
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // Password confirmation
        ]);

        // Buat user baru
        $user = User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        // Autentikasi user setelah registrasi
        Auth::login($user);

        // Redirect ke halaman setelah registrasi sukses
        return redirect()->route('login');
    }

    // Proses Login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba autentikasi pengguna
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect ke halaman setelah login sukses
            return redirect()->route('dashboard2');
        }

        // Jika login gagal
        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
