<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasiensModel extends Model
{
    protected $table = 'pasiens';

    protected $fillable = ['user_id', 'no_pasien', 'nama', 'umur', 'jenis_kelamin'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function daftars()
    {
        return $this->hasMany(DaftarsModel::class, 'pasien_id');
    }

    public function reseps()
    {
        return $this->hasMany(ResepsModel::class, 'pasien_id');
    }
}
