@extends('layouts.app')

@section('content')
<h1>Editar Avaliação #{{ $avaliacao->id }}</h1>

<form action="{{ route('avaliacao.update', $avaliacao->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="agendamento_id">Agendamento (ID)</label><br>
    <input type="text" id="agendamento_id" name="agendamento_id" value="{{ old('agendamento_id', $avaliacao->agendamento_id) }}"><br><br>

    <label for="nota">Nota (0-5)</label><br>
    <input type="number" id="nota" name="nota" min="0" max="5" step="1" value="{{ old('nota', $avaliacao->nota) }}"><br><br>

    <label for="comentario">Comentário</label><br>
    <textarea id="comentario" name="comentario" rows="4">{{ old('comentario', $avaliacao->comentario) }}</textarea><br><br>

    <label for="data_avaliacao">Data da Avaliação</label><br>
    <input type="date" id="data_avaliacao" name="data_avaliacao" value="{{ old('data_avaliacao', optional($avaliacao->data_avaliacao)->format('Y-m-d')) }}"><br><br>

    <button type="submit">Atualizar</button>
</form>

<a href="{{ route('avaliacao.index') }}">Voltar</a>
@endsection
