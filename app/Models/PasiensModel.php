<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PasiensModel extends Model
{
    protected $table = 'pasiens';

    protected $fillable = [
        'user_id',
        'no_pasien',
        'nama',
        'umur',
        'jenis_kelamin',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
