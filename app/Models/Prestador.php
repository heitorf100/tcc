<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    use HasFactory;

    protected $table = 'prestador';
    public $timestamps = false;

    protected $fillable = [
        'usuario_id','descricao_servico','tipo_servico',
        'valor','nota_media_avaliacao','data_criacao_perfil'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function servicos()
    {
        return $this->hasMany(ServicoProduto::class, 'prestador_id');
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class, 'prestador_id');
    }
}
