@extends('layouts.app')

@section('content')
<h1>Nova Categoria</h1>

<form action="{{ route('categoria.store') }}" method="POST">
    @csrf

    <label for="nome">Nome</label><br>
    <input type="text" id="nome" name="nome" value="{{ old('nome') }}"><br><br>

    <label for="descricao">Descrição</label><br>
    <textarea id="descricao" name="descricao" rows="4">{{ old('descricao') }}</textarea><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('categoria.index') }}">Voltar</a>
@endsection
