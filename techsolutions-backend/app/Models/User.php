<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nome', 'email', 'cpf', 'telefone', 'cep',
        'uf', 'localidade', 'bairro', 'logradouro',
        'password', 'perfil_id'
    ];

    protected $hidden = ['password', 'remember_token'];

    public function perfil(): BelongsTo {
        return $this->belongsTo(Perfil::class);
    }
}
