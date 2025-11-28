@extends('layouts.app')

@section('content')
<h1>Editar Comunicação #{{ $comunicacao->id }}</h1>

<form action="{{ route('comunicacao.update', $comunicacao->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Remetente (ID)</label><br>
    <input type="number" name="remetente_id" value="{{ old('remetente_id', $comunicacao->remetente_id) }}"><br><br>

    <label>Destinatário (ID)</label><br>
    <input type="number" name="destinatario_id" value="{{ old('destinatario_id', $comunicacao->destinatario_id) }}"><br><br>

    <label>Mensagem</label><br>
    <textarea name="mensagem">{{ old('mensagem', $comunicacao->mensagem) }}</textarea><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('comunicacao.index') }}">Voltar</a>
@endsection
