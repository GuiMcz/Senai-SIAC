<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convite extends Model {
    protected $fillable = ['email', 'token', 'status', 'expira_em'];

    protected $casts = [
        'expira_em' => 'datetime',
    ];
}
