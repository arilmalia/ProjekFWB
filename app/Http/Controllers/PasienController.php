<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PasiensModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    public function lihatPasien()
    {
        $pasiens = PasiensModel::all();
        return view('pasiens.LihatPasien', compact('pasiens'));
    }

    public function tambahPasien(Request $request)
    {
        if ($request->isMethod('post')) {
            $pasien = new PasiensModel();
            
            // Jika pasien yang login, gunakan ID mereka. Jika admin, gunakan dari form.
            $pasien->user_id = Auth::user()->role == 'pasien' ? Auth::id() : $request->user_id;

            $pasien->no_pasien = $request->no_pasien;
            $pasien->nama = $request->nama;
            $pasien->umur = $request->umur;
            $pasien->jenis_kelamin = $request->jenis_kelamin;
            $pasien->save();

            return redirect('/lihatpasien')->with('success', 'Data pasien berhasil ditambahkan');
        }
        
        // Hanya ambil semua user pasien jika yang login adalah admin
        $users = Auth::user()->role == 'admin' ? User::where('role', 'pasien')->get() : [];

        return view('pasiens.TambahPasien', compact('users'));
    }

    public function hapusPasien($id)
    {
        $pasien = PasiensModel::findOrFail($id);
        $pasien->delete();
        return redirect('/lihatpasien')->with('success', 'Data pasien berhasil dihapus');
    }

    public function editPasien(Request $request, $id)
    {
        $pasien = PasiensModel::findOrFail($id);
        $users = User::where('role', 'pasien')->get();

        if ($request->isMethod('post')) {
            $pasien->user_id = $request->user_id;
            $pasien->no_pasien = $request->no_pasien;
            $pasien->nama = $request->nama;
            $pasien->umur = $request->umur;
            $pasien->jenis_kelamin = $request->jenis_kelamin;
            $pasien->save();

            return redirect('/lihatpasien')->with('success', 'Data pasien berhasil diperbarui');
        }

        return view('pasiens.EditPasien', compact('pasien', 'users'));
    }
}
