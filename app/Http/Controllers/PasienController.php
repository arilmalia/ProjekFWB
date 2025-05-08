<?php

namespace App\Http\Controllers;

use App\Models\PasiensModel;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function LihatPasien(){
        $pasien = PasiensModel::all();
        return view('Pasiens.LihatPasien', compact('pasien'));
    }
}
