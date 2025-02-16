<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Fungsi untuk registrasi
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ], [
            'email.email' => 'Format email tidak valid!',
            'email.unique' => 'Email ini sudah terdaftar, silakan gunakan email lain atau masuk dengan akun tersebut.',
            'password.confirmed' => 'Konfirmasi password tidak cocok!',
            'password.min' => 'Password minimal 6 karakter!',

        ]);

        // Membuat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Setelah registrasi berhasil, langsung login
        Auth::login($user);

        return redirect()->route('layout.tampilanlist');
    }

    // Fungsi untuk login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek apakah data login benar
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('layout.tampilanlist');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ]);
    }

    // Fungsi untuk logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}