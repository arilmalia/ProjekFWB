<?php

namespace App\Http\Controllers;
use App\Models\DaftarsModel;
use App\Models\DoktersModel;
use App\Models\PasiensModel;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function LihatDaftar(){
        $daftars = DaftarsModel::all();
        return view('daftars.LihatDaftar', compact('daftars'));
    }

}
