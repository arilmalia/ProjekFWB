<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResepsModel extends Model
{
    protected $table = 'reseps';

    protected $fillable = ['pasien_id', 'daftar_id', 'nama_obat', 'keterangan'];

    public function pasien()
    {
        return $this->belongsTo(PasiensModel::class);
    }

    public function daftar()
    {
        return $this->belongsTo(DaftarsModel::class);
    }
}
