<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutentikasiController extends Controller
{
    public function tampil_login()
    {
        return view('autentikasi.login');
    }

    public function tampil_regis()
    {
        return view('autentikasi.regis');
    }

    public function home()
    {
        return view('home');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $log = $request->only('email', 'password');

        if (Auth::attempt($log, $request->filled('ingat'))) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect('/admin');
            } elseif (Auth::user()->role === 'dokter') {
                return redirect('/dokter');
            } elseif (Auth::user()->role === 'pasien') {
                return redirect('/pasien');
            } else {
                return redirect()->route('home');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->onlyInput('email');
    }

    public function regis(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,dokter,pasien',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect('/home')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home')->with('success', 'Anda berhasil logout.');
    }
}
