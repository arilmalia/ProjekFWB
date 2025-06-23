<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RoleControl extends Controller
{
    public function logins()
    {
        $logins = User::orderBy('created_at', 'desc')->get();
        return view('users.LihatRole', compact('logins'));
    }

    public function updateRole(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        // Validasi role
        $request->validate([
            'role' => 'required|in:admin,dokter,pasien'
        ]);

        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'Role user berhasil diperbarui');
    }

    public function resetPassword($id)
    {
        $user = User::findOrFail($id);
        
        // Reset password ke default
        $user->password = Hash::make('password123');
        $user->save();

        return redirect()->back()->with('success', 'Password user berhasil direset');
    }
}
