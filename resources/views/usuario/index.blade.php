@extends('layouts.app')

@section('content')
<h1>Usuários</h1>

<a href="{{ route('usuario.create') }}">Novo Usuário</a>

<table border="1" cellpadding="6" cellspacing="0" width="100%">
<thead>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Tipo</th>
    <th>Ações</th>
</tr>
</thead>
<tbody>
@forelse($usuarios as $u)
<tr>
    <td>{{ $u->id }}</td>
    <td>{{ $u->nome }}</td>
    <td>{{ $u->email }}</td>
    <td>{{ $u->tipo }}</td>
    <td>
        <a href="{{ route('usuario.show', $u->id) }}">Ver</a> |
        <a href="{{ route('usuario.edit', $u->id) }}">Editar</a> |
        <form action="{{ route('usuario.destroy', $u->id) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button onclick="return confirm('Excluir usuário?')">Excluir</button>
        </form>
    </td>
</tr>
@empty
<tr><td colspan="5">Nenhum usuário encontrado.</td></tr>
@endforelse
</tbody>
</table>
@endsection
