<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    public $timestamps = false;

    protected $fillable = [
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class, 'cliente_id');
    }

    public function comunicacoes()
    {
        return $this->hasMany(Comunicacao::class, 'cliente_id');
    }
}
