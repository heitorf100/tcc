@extends('layouts.app')

@section('content')
<h1>Editar Prestador #{{ $prestador->id }}</h1>

<form action="{{ route('prestador.update', $prestador->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Usuário (ID)</label><br>
    <input type="number" name="usuario_id" value="{{ old('usuario_id', $prestador->usuario_id) }}"><br><br>

    <label>Tipo</label><br>
    <input type="text" name="tipo" value="{{ old('tipo', $prestador->tipo) }}"><br><br>

    <label>Valor</label><br>
    <input type="number" step="0.01" name="valor" value="{{ old('valor', $prestador->valor) }}"><br><br>

    <label>Descrição</label><br>
    <textarea name="descricao">{{ old('descricao', $prestador->descricao) }}</textarea><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('prestador.index') }}">Voltar</a>
@endsection
