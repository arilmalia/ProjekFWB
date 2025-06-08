<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarsModel;
use App\Models\PasiensModel;
use App\Models\DoktersModel;

class DaftarController extends Controller
{
    public function lihatDaftar()
    {
        $daftar = DaftarsModel::with(['pasien', 'dokter'])->get();
        return view('daftars.LihatDaftar', compact('daftar'));
    }

    public function tambahDaftar(Request $request)
    {
        $pasiens = PasiensModel::all();
        $dokters = DoktersModel::all();

        if ($request->isMethod('post')) {
            $daftar = new DaftarsModel();
            $daftar->pasien_id = $request->pasien_id;
            $daftar->dokter_id = $request->dokter_id;
            $daftar->tanggal_daftar = $request->tanggal_daftar;
            $daftar->keluhan = $request->keluhan;
            $daftar->diagnosis = $request->diagnosis;
            $daftar->tindakan = $request->tindakan;
            $daftar->save();

            return redirect('/lihatdaftar')->with('success', 'Data berhasil ditambahkan');
        }

        return view('daftars.TambahDaftars', compact('pasiens', 'dokters'));
    }

    public function hapusDaftar($id)
    {
        $daftar = DaftarsModel::findOrFail($id);
        $daftar->delete();
        return redirect('/lihatdaftar')->with('success', 'Data berhasil dihapus');
    }

    public function editDaftar(Request $request, $id)
    {
        $daftar = DaftarsModel::findOrFail($id);
        $pasiens = PasiensModel::all();
        $dokters = DoktersModel::all();

        if ($request->isMethod('post')) {
            $daftar->pasien_id = $request->pasien_id;
            $daftar->dokter_id = $request->dokter_id;
            $daftar->tanggal_daftar = $request->tanggal_daftar;
            $daftar->keluhan = $request->keluhan;
            $daftar->diagnosis = $request->diagnosis;
            $daftar->tindakan = $request->tindakan;
            $daftar->save();

            return redirect('/lihatdaftar')->with('success', 'Data berhasil diubah');
        }

        return view('daftars.EditDaftars', compact('daftar', 'pasiens', 'dokters'));
    }
}
