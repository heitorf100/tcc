@extends('layouts.app')

@section('content')
<h1>Avaliação #{{ $avaliacao->id }}</h1>

<p><strong>Agendamento:</strong> {{ $avaliacao->agendamento_id ?? '-' }}</p>
<p><strong>Nota:</strong> {{ $avaliacao->nota ?? '-' }}</p>
<p><strong>Comentário:</strong></p>
<p>{{ $avaliacao->comentario ?? '-' }}</p>
<p><strong>Data da Avaliação:</strong> {{ isset($avaliacao->data_avaliacao) ? \Carbon\Carbon::parse($avaliacao->data_avaliacao)->format('d/m/Y') : '-' }}</p>

<a href="{{ route('avaliacao.edit', $avaliacao->id) }}">Editar</a> |
<a href="{{ route('avaliacao.index') }}">Voltar</a>

<form action="{{ route('avaliacao.destroy', $avaliacao->id) }}" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button onclick="return confirm('Confirma exclusão?')">Excluir</button>
</form>
@endsection
