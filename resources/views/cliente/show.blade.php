@extends('layouts.app')

@section('content')
<h1>Cliente #{{ $cliente->id }}</h1>

<p><strong>Nome:</strong> {{ $cliente->nome ?? $cliente->nomeCompleto ?? '-' }}</p>
<p><strong>Email:</strong> {{ $cliente->email ?? '-' }}</p>
<p><strong>Telefone:</strong> {{ $cliente->telefone ?? '-' }}</p>
<p><strong>CPF:</strong> {{ $cliente->cpf ?? '-' }}</p>
<p><strong>Data de nascimento:</strong> {{ isset($cliente->data_nascimento) ? \Carbon\Carbon::parse($cliente->data_nascimento)->format('d/m/Y') : '-' }}</p>

<h3>Endereço</h3>
<p>{{ $cliente->logradouro ?? '-' }}, {{ $cliente->numero ?? '' }}</p>
<p>{{ $cliente->bairro ?? '-' }} — {{ $cliente->cidade ?? '-' }} / {{ $cliente->estado ?? '-' }}</p>
<p>CEP: {{ $cliente->cep ?? '-' }}</p>

<a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a> |
<a href="{{ route('cliente.index') }}">Voltar</a>

<form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button onclick="return confirm('Confirma exclusão do cliente?')">Excluir</button>
</form>
@endsection
