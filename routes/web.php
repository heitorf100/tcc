<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\CategoriaServicoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComunicacaoController;
use App\Http\Controllers\PrestadorController;
use App\Http\Controllers\ServicoProdutoController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});
