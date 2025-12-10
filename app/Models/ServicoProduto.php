<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicoProduto extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['prestador_id','nome','descricao','preco','tipo'];
}
