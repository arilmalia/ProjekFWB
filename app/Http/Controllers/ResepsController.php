<?php

namespace App\Http\Controllers;

use App\Models\ResepsModel;
use Illuminate\Http\Request;

class ResepsController extends Controller
{
        public function LihatResep(){
        $reseps = ResepsModel::all();
        return view('reseps.Lihatreseps', compact('reseps'));
    }
}
