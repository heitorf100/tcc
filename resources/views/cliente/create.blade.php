@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Novo Cliente</h1>
  <form action="{{ route('cliente.store') }}" method="POST">
    @csrf
    <div class="mb-2"><label>Nome</label><input name="nome" class="form-control" required></div>
    <div class="mb-2"><label>Email</label><input name="email" class="form-control"></div>
    <div class="mb-2"><label>Telefone</label><input name="telefone" class="form-control"></div>
    <div class="mb-2"><label>CPF</label><input name="cpf" class="form-control"></div>
    <div class="mb-2"><label>Data Nascimento</label><input name="data_nascimento" type="date" class="form-control"></div>
    <div class="mb-2"><label>Logradouro</label><input name="logradouro" class="form-control"></div>
    <div class="mb-2"><label>Número</label><input name="numero" class="form-control"></div>
    <div class="mb-2"><label>Bairro</label><input name="bairro" class="form-control"></div>
    <div class="mb-2"><label>Cidade</label><input name="cidade" class="form-control"></div>
    <div class="mb-2"><label>Estado</label><input name="estado" class="form-control"></div>
    <div class="mb-2"><label>CEP</label><input name="cep" class="form-control"></div>
    <div class="mb-2"><label>usuario_id</label><input name="usuario_id" class="form-control"></div>

    <button class="btn btn-success">Salvar</button>
    <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Cancelar</a>
  </form>
</div>
@endsection
