@extends('layouts.app')

@section('content')
<h1>Usuário #{{ $usuario->id }}</h1>

<p><strong>Nome:</strong> {{ $usuario->nome }}</p>
<p><strong>Email:</strong> {{ $usuario->email }}</p>
<p><strong>Tipo:</strong> {{ $usuario->tipo }}</p>

<a href="{{ route('usuario.edit', $usuario->id) }}">Editar</a> |
<a href="{{ route('usuario.index') }}">Voltar</a>
@endsection
