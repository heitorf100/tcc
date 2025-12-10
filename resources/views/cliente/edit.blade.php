@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Editar Cliente</h1>
  <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-2"><label>Nome</label><input name="nome" class="form-control" value="{{ $cliente->nome }}" required></div>
    <div class="mb-2"><label>Email</label><input name="email" class="form-control" value="{{ $cliente->email }}"></div>
    <div class="mb-2"><label>Telefone</label><input name="telefone" class="form-control" value="{{ $cliente->telefone }}"></div>
    <div class="mb-2"><label>CPF</label><input name="cpf" class="form-control" value="{{ $cliente->cpf }}"></div>
    <div class="mb-2"><label>Data Nascimento</label><input name="data_nascimento" type="date" class="form-control" value="{{ $cliente->data_nascimento }}"></div>
    <div class="mb-2"><label>Logradouro</label><input name="logradouro" class="form-control" value="{{ $cliente->logradouro }}"></div>
    <div class="mb-2"><label>Número</label><input name="numero" class="form-control" value="{{ $cliente->numero }}"></div>
    <div class="mb-2"><label>Bairro</label><input name="bairro" class="form-control" value="{{ $cliente->bairro }}"></div>
    <div class="mb-2"><label>Cidade</label><input name="cidade" class="form-control" value="{{ $cliente->cidade }}"></div>
    <div class="mb-2"><label>Estado</label><input name="estado" class="form-control" value="{{ $cliente->estado }}"></div>
    <div class="mb-2"><label>CEP</label><input name="cep" class="form-control" value="{{ $cliente->cep }}"></div>
    <div class="mb-2"><label>usuario_id</label><input name="usuario_id" class="form-control" value="{{ $cliente->usuario_id }}"></div>

    <button class="btn btn-primary">Atualizar</button>
    <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Cancelar</a>
  </form>
</div>
@endsection
