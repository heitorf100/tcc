@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Nova Categoria</h1>
  <form action="{{ route('categoria.store') }}" method="POST">
    @csrf
    <div class="mb-2"><label>Nome</label><input name="nome" class="form-control" required></div>
    <div class="mb-2"><label>Descrição</label><textarea name="descricao" class="form-control"></textarea></div>
    <button class="btn btn-success">Salvar</button>
  </form>
</div>
@endsection
