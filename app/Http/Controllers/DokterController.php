<?php

namespace App\Http\Controllers;

use App\Models\DoktersModel;
use Illuminate\Http\Request;

class DokterController extends Controller
{
     public function LihatDokter(){
        $dokter = DoktersModel::all();
        return view('dokters.LihatDokter', compact('dokter'));
    }
}
