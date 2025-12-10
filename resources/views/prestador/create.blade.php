@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Novo Prestador</h1>
  <form action="{{ route('prestador.store') }}" method="POST">
    @csrf
    <div class="mb-2"><label>Nome</label><input name="nome" class="form-control" required></div>
    <div class="mb-2"><label>Email</label><input name="email" class="form-control"></div>
    <div class="mb-2"><label>Telefone</label><input name="telefone" class="form-control"></div>
    <div class="mb-2"><label>Descrição</label><textarea name="descricao" class="form-control"></textarea></div>
    <div class="mb-2"><label>Valor/H</label><input name="valor_hora" class="form-control"></div>
    <div class="mb-2"><label>Categoria ID</label><input name="categoria_id" class="form-control"></div>
    <div class="mb-2"><label>Usuario ID</label><input name="usuario_id" class="form-control"></div>
    <button class="btn btn-success">Salvar</button>
    <a class="btn btn-secondary" href="{{ route('prestador.index') }}">Cancelar</a>
  </form>
</div>
@endsection
