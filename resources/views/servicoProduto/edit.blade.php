@extends('layouts.app')

@section('content')
<h1>Editar Serviço / Produto #{{ $servico->id }}</h1>

<form action="{{ route('servicoProduto.update', $servico->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome</label><br>
    <input type="text" name="nome" value="{{ old('nome', $servico->nome) }}"><br><br>

    <label>Descrição</label><br>
    <textarea name="descricao">{{ old('descricao', $servico->descricao) }}</textarea><br><br>

    <label>Valor</label><br>
    <input type="number" step="0.01" name="valor" value="{{ old('valor', $servico->valor) }}"><br><br>

    <label>Categoria ID</label><br>
    <input type="number" name="categoria_id" value="{{ old('categoria_id', $servico->categoria_id) }}"><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('servicoProduto.index') }}">Voltar</a>
@endsection
