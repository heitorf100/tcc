@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Agendamento</h1>

    <p><strong>ID:</strong> {{ $agendamento->id }}</p>
    <p><strong>Cliente:</strong> {{ $agendamento->cliente->nome ?? '—' }}</p>
    <p><strong>Prestador:</strong> {{ $agendamento->prestador->nome ?? '—' }}</p>
    <p><strong>Serviço:</strong> {{ $agendamento->servico->nome ?? '—' }}</p>
    <p><strong>Data e Hora:</strong> {{ $agendamento->data_hora }}</p>
    <p><strong>Status:</strong> {{ $agendamento->status }}</p>

    <a href="{{ route('agendamento.edit', $agendamento->id) }}" class="btn btn-warning">Editar</a>

    <form action="{{ route('agendamento.destroy', $agendamento->id) }}" method="POST" style="display:inline-block">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Excluir?')" class="btn btn-danger">Excluir</button>
    </form>

    <a href="{{ route('agendamento.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
