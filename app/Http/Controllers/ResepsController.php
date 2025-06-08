<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResepsModel;
use App\Models\PasiensModel;
use App\Models\DaftarsModel;

class ResepsController extends Controller
{
    public function lihatResep()
    {
        $reseps = ResepsModel::with(['pasien', 'daftar'])->get();
        return view('reseps.LihatReseps', compact('reseps'));
    }

    public function tambahResep(Request $request)
    {
        $pasiens = PasiensModel::all();
        $daftars = DaftarsModel::all();

        if ($request->isMethod('post')) {
            ResepsModel::create($request->all());
            return redirect('/lihatresep')->with('success', 'Resep berhasil ditambahkan');
        }

        return view('reseps.TambahResep', compact('pasiens', 'daftars'));
    }

    public function editResep(Request $request, $id)
    {
        $resep = ResepsModel::findOrFail($id);
        $pasiens = PasiensModel::all();
        $daftars = DaftarsModel::all();

        if ($request->isMethod('post')) {
            $resep->update($request->all());
            return redirect('/lihatresep')->with('success', 'Resep berhasil diperbarui');
        }

        return view('reseps.EditReseps', compact('resep', 'pasiens', 'daftars'));
    }

    public function hapusResep($id)
    {
        ResepsModel::findOrFail($id)->delete();
        return redirect('/lihatresep')->with('success', 'Resep berhasil dihapus');
    }
}
