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

Route::apiResource('agendamento', AgendamentoController::class);
Route::apiResource('avaliacao', AvaliacaoController::class);
Route::apiResource('categoria', CategoriaServicoController::class);
Route::apiResource('cliente', ClienteController::class);
Route::apiResource('comunicacao', ComunicacaoController::class);
Route::apiResource('prestador', PrestadorController::class);
Route::apiResource('servicoProduto', ServicoProdutoController::class);
Route::apiResource('usuario', UsuarioController::class);
