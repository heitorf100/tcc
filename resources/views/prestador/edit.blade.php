@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Editar Prestador</h1>
  <form action="{{ route('prestador.update',$prestador->id) }}" method="POST">
    @csrf @method('PUT')
    <input name="nome" class="form-control mb-2" value="{{ $prestador->nome }}" required>
    <input name="email" class="form-control mb-2" value="{{ $prestador->email }}">
    <input name="telefone" class="form-control mb-2" value="{{ $prestador->telefone }}">
    <textarea name="descricao" class="form-control mb-2">{{ $prestador->descricao }}</textarea>
    <input name="valor_hora" class="form-control mb-2" value="{{ $prestador->valor_hora }}">
    <input name="categoria_id" class="form-control mb-2" value="{{ $prestador->categoria_id }}">
    <input name="usuario_id" class="form-control mb-2" value="{{ $prestador->usuario_id }}">
    <button class="btn btn-primary">Atualizar</button>
    <a class="btn btn-secondary" href="{{ route('prestador.index') }}">Cancelar</a>
  </form>
</div>
@endsection
