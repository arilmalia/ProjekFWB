<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use Illuminate\Http\Request;

class RoleControl extends Controller
{
    public function logins()
    {
        $logins = RoleModel::all();
        return view('logins', compact('logins'));
    }
}
