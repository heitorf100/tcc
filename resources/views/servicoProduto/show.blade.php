@extends('layouts.app')

@section('content')
<h1>Serviço / Produto #{{ $servico->id }}</h1>

<p><strong>Nome:</strong> {{ $servico->nome }}</p>
<p><strong>Descrição:</strong> {{ $servico->descricao }}</p>
<p><strong>Valor:</strong> {{ $servico->valor }}</p>
<p><strong>Categoria ID:</strong> {{ $servico->categoria_id }}</p>

<a href="{{ route('servicoProduto.edit', $servico->id) }}">Editar</a> |
<a href="{{ route('servicoProduto.index') }}">Voltar</a>
@endsection
