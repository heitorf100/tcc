<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
	'funcionario_id',
	'data',
	'descricao',
	'user_id'
	];
}

