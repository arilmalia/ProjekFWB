<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarsModel extends Model
{
    protected $table = 'daftars';

    protected $fillable = ['pasien_id', 'dokter_id', 'tanggal_daftar', 'keluhan', 'diagnosis', 'tindakan'];

    public function pasien()
    {
        return $this->belongsTo(PasiensModel::class);
    }

    public function dokter()
    {
        return $this->belongsTo(DoktersModel::class);
    }

    public function reseps()
    {
        return $this->hasMany(ResepsModel::class, 'daftar_id');
    }
}
