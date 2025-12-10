@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Usuários</h1>

    <a href="{{ route('usuario.create') }}">Criar Novo Usuário</a>

    <table border="1" cellpadding="8" style="margin-top:20px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
                    <a href="{{ route('usuario.show', $usuario) }}">Ver</a> |
                    <a href="{{ route('usuario.edit', $usuario) }}">Editar</a> |
                    <form action="{{ route('usuario.destroy', $usuario) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Excluir usuário?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $usuarios->links() }}
</div>
@endsection
