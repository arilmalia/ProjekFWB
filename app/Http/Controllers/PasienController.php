<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PasiensModel;
use App\Models\User;

class PasienController extends Controller
{
    public function lihatPasien()
    {
        $pasiens = PasiensModel::all();
        return view('pasiens.LihatPasien', compact('pasiens'));
    }

    public function tambahPasien(Request $request)
    {
        $users = User::all();

        if ($request->isMethod('post')) {
            $pasien = new PasiensModel();
            $pasien->user_id = $request->user_id;
            $pasien->no_pasien = $request->no_pasien;
            $pasien->nama = $request->nama;
            $pasien->umur = $request->umur;
            $pasien->jenis_kelamin = $request->jenis_kelamin;
            $pasien->save();

            return redirect('/lihatpasien')->with('success', 'Data pasien berhasil ditambahkan');
        }

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
        $users = User::all();

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
