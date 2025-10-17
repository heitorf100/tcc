<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'cpf_cnpj',
        'email',
        'senha',
        'telefone',
        'tipo_usuario',
        'data_cadastro',
        'banco',
        'agencia',
        'conta',
        'tipo_conta',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'cep'
    ];

    protected $casts = [
        'cpf_validado' => 'boolean',
        'email_validado' => 'boolean',
        'telefone_validado' => 'boolean',
        'data_cadastro' => 'datetime',
    ];

    // exemplos de relacionamentos
    public function prestador()
    {
        return $this->hasOne(Prestador::class, 'usuario_id');
    }

    public function comunicacoes()
    {
        return $this->hasMany(Comunicacao::class, 'cliente_usuario_id');
    }
}
