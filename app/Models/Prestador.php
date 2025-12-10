<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = true;

    protected $fillable = [
        'nome','email','telefone','descricao','valor_hora','categoria_id','usuario_id'
    ];

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class, 'prestador_id');
    }

    public function servicos()
    {
        return $this->hasMany(ServicoProduto::class, 'prestador_id');
    }
}
