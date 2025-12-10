<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimento extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['nome','descricao','duracao_minutos'];
}
