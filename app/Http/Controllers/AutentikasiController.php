<?php

namespace App\Http\Controllers;

use App\Models\autentikasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutentikasiController extends Controller
{

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
            }
            elseif (Auth::user()->role === 'petugas') {
                
                return redirect()->route('petugas');
            }
            else {
                return redirect() ->route('home');
            }

        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->onlyInput('email');

    }


    public function tampil_regis()
    {
        return view('autentikasi.regis');
    }
    public function home()
    {
        return view('home');
    }

    public function regis(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request ->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('autentikasi.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(autentikasi $autentikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(autentikasi $autentikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, autentikasi $autentikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(autentikasi $autentikasi)
    {
        //
    }
}
