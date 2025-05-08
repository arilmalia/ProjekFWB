<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoktersModel extends Model
{
    protected $table = 'dokters';

    protected $fillable = [
        'user_id',
        'no_dokter',
        'nama',
        'spesialis',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
