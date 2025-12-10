@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Usuário</h1>

    <form action="{{ route('usuario.update', $usuario) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label><br>
        <input type="text" name="name" value="{{ $usuario->name }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $usuario->email }}" required><br><br>

        <label>Senha (opcional):</label><br>
        <input type="password" name="password"><br><br>
        <small>Deixe em branco para manter a senha atual.</small><br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('usuario.index') }}">Voltar</a>
</div>
@endsection
