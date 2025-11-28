@extends('layouts.app')

@section('content')
<h1>Editar Categoria #{{ $categoria->id }}</h1>

<form action="{{ route('categoria.update', $categoria->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nome">Nome</label><br>
    <input type="text" id="nome" name="nome" value="{{ old('nome', $categoria->nome) }}"><br><br>

    <label for="descricao">Descrição</label><br>
    <textarea id="descricao" name="descricao" rows="4">{{ old('descricao', $categoria->descricao) }}</textarea><br><br>

    <button type="submit">Atualizar</button>
</form>

<a href="{{ route('categoria.index') }}">Voltar</a>
@endsection
