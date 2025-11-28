@extends('layouts.app')

@section('content')
<h1>Nova Avaliação</h1>

<form action="{{ route('avaliacao.store') }}" method="POST">
    @csrf

    <label for="agendamento_id">Agendamento (ID)</label><br>
    <input type="text" id="agendamento_id" name="agendamento_id" value="{{ old('agendamento_id') }}"><br><br>

    <label for="nota">Nota (0-5)</label><br>
    <input type="number" id="nota" name="nota" min="0" max="5" step="1" value="{{ old('nota') }}"><br><br>

    <label for="comentario">Comentário</label><br>
    <textarea id="comentario" name="comentario" rows="4">{{ old('comentario') }}</textarea><br><br>

    <label for="data_avaliacao">Data da Avaliação</label><br>
    <input type="date" id="data_avaliacao" name="data_avaliacao" value="{{ old('data_avaliacao') }}"><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('avaliacao.index') }}">Voltar</a>
@endsection
