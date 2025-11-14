<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicoProduto extends Model
{
    use HasFactory;

    protected $table = 'servico_produto';
    public $timestamps = false;

    protected $fillable = [
        'categoria_id','prestador_id','tipo','descricao'
    ];

    public function categoria()
    {
        return $this->belongsTo(CategoriaServico::class, 'categoria_id');
    }

    public function prestador()
    {
        return $this->belongsTo(Prestador::class, 'prestador_id');
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class, 'servico_produto_id');
    }
}
