@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Editar Categoria</h1>
  <form action="{{ route('categoria.update',$categoria->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-2"><label>Nome</label><input name="nome" class="form-control" value="{{ $categoria->nome }}" required></div>
    <div class="mb-2"><label>Descrição</label><textarea name="descricao" class="form-control">{{ $categoria->descricao }}</textarea></div>
    <button class="btn btn-primary">Atualizar</button>
  </form>
</div>
@endsection
