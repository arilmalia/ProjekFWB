<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoktersModel;
use App\Models\User;

class DokterController extends Controller
{
    public function lihatDokter()
    {
        $dokters = DoktersModel::all();
        return view('dokters.LihatDokter', compact('dokters'));
    }

    public function tambahDokter(Request $request)
    {
        $users = User::all();

        if ($request->isMethod('post')) {
            $dokter = new DoktersModel();
            $dokter->user_id = $request->user_id;
            $dokter->no_dokter = $request->no_dokter;
            $dokter->nama = $request->nama;
            $dokter->spesialis = $request->spesialis;
            $dokter->save();

            return redirect('/lihatdokter')->with('success', 'Data dokter berhasil ditambahkan');
        }

        return view('dokters.TambahDokter', compact('users'));
    }

    public function hapusDokter($id)
    {
        $data = DoktersModel::find($id);
        $data->delete();
        return redirect('/lihatdokter')->with('success', 'Data dokter berhasil dihapus');
    }

    public function editDokter(Request $request, $id)
    {
        $dokter = DoktersModel::findOrFail($id);
        $users = User::all();

        if ($request->isMethod('post')) {
            $dokter->user_id = $request->user_id;
            $dokter->no_dokter = $request->no_dokter;
            $dokter->nama = $request->nama;
            $dokter->spesialis = $request->spesialis;
            $dokter->save();

            return redirect('/lihatdokter')->with('success', 'Data dokter berhasil diperbarui');
        }

        return view('dokters.EditDokter', compact('dokter', 'users'));
    }
}
