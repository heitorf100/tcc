@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Avaliação #{{ $avaliacao->id }}</h1>

    <p><strong>Cliente:</strong> {{ $avaliacao->cliente->nome }}</p>
    <p><strong>Prestador:</strong> {{ $avaliacao->prestador->nome }}</p>
    <p><strong>Agendamento:</strong> {{ $avaliacao->agendamento_id ?? 'Nenhum' }}</p>
    <p><strong>Nota:</strong> {{ $avaliacao->nota }}</p>
    <p><strong>Comentário:</strong> {{ $avaliacao->comentario }}</p>

    <a href="{{ route('avaliacao.edit', $avaliacao->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('avaliacao.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
