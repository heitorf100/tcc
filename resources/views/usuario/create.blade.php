@extends('layouts.app')

@section('content')
<h1>Novo Usuário</h1>

<form action="{{ route('usuario.store') }}" method="POST">
    @csrf

    <label>Nome</label><br>
    <input type="text" name="nome" value="{{ old('nome') }}"><br><br>

    <label>Email</label><br>
    <input type="email" name="email" value="{{ old('email') }}"><br><br>

    <label>Senha</label><br>
    <input type="password" name="senha"><br><br>

    <label>Tipo</label><br>
    <select name="tipo">
        <option value="cliente">Cliente</option>
        <option value="prestador">Prestador</option>
        <option value="admin">Admin</option>
    </select><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('usuario.index') }}">Voltar</a>
@endsection
