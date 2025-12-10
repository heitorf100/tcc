@extends('layouts.app')

@section('content')
<h1>Clientes</h1>

<a href="{{ route('cliente.create') }}">Novo Cliente</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="6" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>Cadastro</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @forelse($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nome ?? ($cliente->nomeCompleto ?? '-') }}</td>
            <td>{{ $cliente->email ?? '-' }}</td>
            <td>{{ $cliente->telefone ?? '-' }}</td>
            <td>{{ $cliente->cpf ?? '-' }}</td>
            <td>{{ isset($cliente->data_cadastro) ? \Carbon\Carbon::parse($cliente->data_cadastro)->format('d/m/Y') : (isset($cliente->data_cadastro) ? \Carbon\Carbon::parse($cliente->data_cadastro)->format('d/m/Y') : '-') }}</td>
            <td>
                <a href="{{ route('cliente.show', $cliente->id) }}">Ver</a> |
                <a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a> |
                <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Confirma exclusão do cliente?')">Excluir</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="7">Nenhum cliente cadastrado.</td></tr>
    @endforelse
    </tbody>
</table>
@endsection
