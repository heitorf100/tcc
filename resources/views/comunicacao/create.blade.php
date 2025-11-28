@extends('layouts.app')

@section('content')
<h1>Nova Comunicação</h1>

<form action="{{ route('comunicacao.store') }}" method="POST">
    @csrf

    <label>Remetente (ID)</label><br>
    <input type="number" name="remetente_id" value="{{ old('remetente_id') }}"><br><br>

    <label>Destinatário (ID)</label><br>
    <input type="number" name="destinatario_id" value="{{ old('destinatario_id') }}"><br><br>

    <label>Mensagem</label><br>
    <textarea name="mensagem">{{ old('mensagem') }}</textarea><br><br>

    <button type="submit">Enviar</button>
</form>

<a href="{{ route('comunicacao.index') }}">Voltar</a>
@endsection
