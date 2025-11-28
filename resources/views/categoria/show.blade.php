@extends('layouts.app')

@section('content')
<h1>Categoria #{{ $categoria->id }}</h1>

<p><strong>Nome:</strong> {{ $categoria->nome }}</p>
<p><strong>Descrição:</strong></p>
<p>{{ $categoria->descricao }}</p>

<a href="{{ route('categoria.edit', $categoria->id) }}">Editar</a> |
<a href="{{ route('categoria.index') }}">Voltar</a>

<form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button onclick="return confirm('Excluir esta categoria?')">Excluir</button>
</form>

@endsection
