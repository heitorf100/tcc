@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Usuário</h1>

    <form action="{{ route('usuario.store') }}" method="POST">
        @csrf

        <label>Nome:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Salvar</button>
    </form>
</div>
@endsection
