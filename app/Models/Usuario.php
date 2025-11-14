<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // se usar auth
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuario';
    public $timestamps = false;

    protected $fillable = [
        'nome','cpf_cnpj','email','senha','telefone','tipo_usuario',
        'data_cadastro','banco','agencia','conta','tipo_conta',
        'logradouro','numero','bairro','cidade','estado','cep'
    ];

    protected $hidden = ['senha'];

    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'usuario_id');
    }

    public function prestador()
    {
        return $this->hasOne(Prestador::class, 'usuario_id');
    }
}
