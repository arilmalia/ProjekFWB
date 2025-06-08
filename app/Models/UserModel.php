<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\DoktersModel;
use App\Models\PasiensModel;

class UserModel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    // Kolom yang boleh diisi
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    // Kolom yang disembunyikan saat serialisasi (optional tapi umum)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relasi ke dokter (satu user bisa punya satu dokter)
    public function dokter()
    {
        return $this->hasOne(DoktersModel::class, 'user_id');
    }

    // Relasi ke pasien (satu user bisa punya satu pasien)
    public function pasien()
    {
        return $this->hasOne(PasiensModel::class, 'user_id');
    }
}
