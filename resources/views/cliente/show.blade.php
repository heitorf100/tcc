@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Detalhes do Cliente</h1>

  <p><strong>ID:</strong> {{ $cliente->id }}</p>
  <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
  <p><strong>Email:</strong> {{ $cliente->email }}</p>
  <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
  <p><strong>CPF:</strong> {{ $cliente->cpf }}</p>
  <p><strong>Data Nasc:</strong> {{ $cliente->data_nascimento }}</p>
  <p><strong>Endereço:</strong> {{ $cliente->logradouro }}, {{ $cliente->numero }} - {{ $cliente->bairro }} - {{ $cliente->cidade }} / {{ $cliente->estado }} - {{ $cliente->cep }}</p>

  <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
  <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
