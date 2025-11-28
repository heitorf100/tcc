@extends('layouts.app')

@section('content')
<h1>Prestador #{{ $prestador->id }}</h1>

<p><strong>Usuário ID:</strong> {{ $prestador->usuario_id }}</p>
<p><strong>Tipo:</strong> {{ $prestador->tipo }}</p>
<p><strong>Valor:</strong> {{ $prestador->valor }}</p>
<p><strong>Descrição:</strong> {{ $prestador->descricao }}</p>

<a href="{{ route('prestador.edit', $prestador->id) }}">Editar</a> |
<a href="{{ route('prestador.index') }}">Voltar</a>
@endsection
