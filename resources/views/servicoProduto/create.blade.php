@extends('layouts.app')

@section('content')
<h1>Novo Serviço / Produto</h1>

<form action="{{ route('servicoProduto.store') }}" method="POST">
    @csrf

    <label>Nome</label><br>
    <input type="text" name="nome" value="{{ old('nome') }}"><br><br>

    <label>Descrição</label><br>
    <textarea name="descricao">{{ old('descricao') }}</textarea><br><br>

    <label>Valor</label><br>
    <input type="number" step="0.01" name="valor" value="{{ old('valor') }}"><br><br>

    <label>Categoria ID</label><br>
    <input type="number" name="categoria_id" value="{{ old('categoria_id') }}"><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('servicoProduto.index') }}">Voltar</a>
@endsection
