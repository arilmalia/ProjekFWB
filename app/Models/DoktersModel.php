<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoktersModel extends Model
{
    protected $table = 'dokters';

    protected $fillable = [
    'user_id',
    'no_dokter',
    'nama', 
    'spesialis'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function daftars()
    {
        return $this->hasMany(DaftarsModel::class, 'dokter_id');
    }
}
