@extends('layouts.app')

@section('content')
<h1>Editar Usuário #{{ $usuario->id }}</h1>

<form action="{{ route('usuario.update', $usuario->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome</label><br>
    <input type="text" name="nome" value="{{ old('nome', $usuario->nome) }}"><br><br>

    <label>Email</label><br>
    <input type="email" name="email" value="{{ old('email', $usuario->email) }}"><br><br>

    <label>Senha (deixe vazio para não alterar)</label><br>
    <input type="password" name="senha"><br><br>

    <label>Tipo</label><br>
    <select name="tipo">
        <option value="cliente" {{ $usuario->tipo == 'cliente' ? 'selected' : '' }}>Cliente</option>
        <option value="prestador" {{ $usuario->tipo == 'prestador' ? 'selected' : '' }}>Prestador</option>
        <option value="admin" {{ $usuario->tipo == 'admin' ? 'selected' : '' }}>Admin</option>
    </select><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('usuario.index') }}">Voltar</a>
@endsection
