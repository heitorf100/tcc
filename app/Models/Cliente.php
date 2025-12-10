<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cpf',
        'data_nascimento',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'usuario_id'
    ];
}
