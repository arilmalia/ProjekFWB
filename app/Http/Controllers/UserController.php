<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
        public function LihatUser(){
        $users = UserModel::all();
        return view('users.LihatUser', compact('users'));
    }
}
