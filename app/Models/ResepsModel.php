<?php

namespace App\Models;
use App\Models\PasiensModel;
use App\Models\DaftarsModel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResepsModel extends Model
{
    protected $table = 'reseps';

    protected $fillable = [
        'pasien_id',
        'daftar_id',
        'nama_obat',
        'keterangan',
    ];

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(PasiensModel::class);
    }

    public function daftar(): BelongsTo
    {
        return $this->belongsTo(DaftarsModel::class);
    }
}
