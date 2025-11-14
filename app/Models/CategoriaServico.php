<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaServico extends Model
{
    use HasFactory;

    protected $table = 'categoria_servico_produto';
    public $timestamps = false;

    protected $fillable = [
        'nome','descricao'
    ];

    public function servicos()
    {
        return $this->hasMany(ServicoProduto::class, 'categoria_id');
    }
}
