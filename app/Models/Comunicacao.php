<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicacao extends Model
{
    use HasFactory;

    protected $table = 'comunicacao';
    public $timestamps = false;

    protected $fillable = [
        'cliente_id','prestador_id','data_comunicacao','hora_comunicacao','conteudo_mensagem','remetente'
    ];

    protected $casts = [
        'data_comunicacao' => 'date'
    ];

    public function cliente() { return $this->belongsTo(Cliente::class, 'cliente_id'); }
    public function prestador() { return $this->belongsTo(Prestador::class, 'prestador_id'); }
}
