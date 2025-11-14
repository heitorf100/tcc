<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $table = 'avaliacao_servico';
    public $timestamps = false;

    protected $fillable = [
        'agendamento_id','nota','comentario','data_avaliacao'
    ];

    protected $casts = [
        'data_avaliacao' => 'date',
    ];

    public function agendamento()
    {
        return $this->belongsTo(Agendamento::class, 'agendamento_id');
    }
}
