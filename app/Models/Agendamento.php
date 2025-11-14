<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $table = 'agendamento_servico_recebimento';
    public $timestamps = false;

    protected $fillable = [
        'cliente_id','prestador_id','servico_produto_id','status',
        'data_agendamento','hora_agendamento','valor_servico',
        'data_execucao','hora_execucao','taxa','id_recebimento','status_recebimento',
        'data_recebimento','forma_recebimento','logradouro','numero','bairro','cidade','estado','cep'
    ];

    protected $casts = [
        'data_agendamento' => 'date',
        'data_execucao' => 'date',
        'data_recebimento' => 'date',
    ];

    public function cliente() { return $this->belongsTo(Cliente::class, 'cliente_id'); }
    public function prestador() { return $this->belongsTo(Prestador::class, 'prestador_id'); }
    public function servico() { return $this->belongsTo(ServicoProduto::class, 'servico_produto_id'); }
    public function avaliacoes() { return $this->hasMany(Avaliacao::class, 'agendamento_id'); }
}
