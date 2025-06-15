<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RoleModel extends Authenticatable
{
    use HasFactory;
    protected $table = 'logins';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
}
