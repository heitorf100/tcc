@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Procedimento</h2>

    <p><strong>Nome:</strong> {{ $procedimento->nome }}</p>
    <p><strong>Descrição:</strong> {{ $procedimento->descricao ?? '—' }}</p>
    <p><strong>Duração:</strong> {{ $procedimento->duracao_minutos ?? '—' }} minutos</p>

    <a href="{{ route('procedimento.index') }}" class="btn btn-secondary">Voltar</a>
    <a href="{{ route('procedimento.edit', $procedimento->id) }}" class="btn btn-warning">Editar</a>

    <form action="{{ route('procedimento.destroy', $procedimento->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Excluir procedimento?')" class="btn btn-danger">Excluir</button>
    </form>
</div>
@endsection
