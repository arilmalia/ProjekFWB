<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function lihatUser()
    {
        $users = UserModel::all();
        return view('users.LihatUser', compact('users'));
    }

    public function tambahUser(Request $request)
    {
        if ($request->isMethod('post')) {
            UserModel::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);

            return redirect('/lihatuser')->with('success', 'User berhasil ditambahkan');
        }

        return view('users.TambaUser');
    }

    public function editUser(Request $request, $id)
    {
        $user = UserModel::findOrFail($id);

        if ($request->isMethod('post')) {
            $user->name = $request->name;
            $user->email = $request->email;

            if ($request->password) {
                $user->password = Hash::make($request->password);
            }

            $user->role = $request->role;
            $user->save();

            return redirect('/lihatuser')->with('success', 'User berhasil diperbarui');
        }

        return view('users.EditUser', compact('user'));
    }

    public function hapusUser($id)
    {
        UserModel::destroy($id);
        return redirect('/lihatuser')->with('success', 'User berhasil dihapus');
    }
}
