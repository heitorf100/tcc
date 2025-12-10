@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dados do Usuário</h1>

    <p><strong>ID:</strong> {{ $usuario->id }}</p>
    <p><strong>Nome:</strong> {{ $usuario->name }}</p>
    <p><strong>Email:</strong> {{ $usuario->email }}</p>

    <a href="{{ route('usuario.edit', $usuario) }}">Editar</a><br>

    <form action="{{ route('usuario.destroy', $usuario) }}" method="POST" style="margin-top:10px;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Excluir usuário?')">Excluir</button>
    </form>

    <br>
    <a href="{{ route('usuario.index') }}">Voltar</a>
</div>
@endsection
