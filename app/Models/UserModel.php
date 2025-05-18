<?php

namespace App\Models;
use App\Models\DoktersModel;
use App\Models\PasiensModel;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';  // nama tabel sesuai di database

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    public function dokter() {
        return $this->hasOne(DoktersModel::class);
    }

    public function pasien(){
        return $this->hasOne(PasiensModel::class);
    }
}


