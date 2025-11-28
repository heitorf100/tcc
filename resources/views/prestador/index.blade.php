@extends('layouts.app')

@section('content')
<h1>Prestadores</h1>

<a href="{{ route('prestador.create') }}">Novo Prestador</a>

<table border="1" cellpadding="6" cellspacing="0" width="100%">
<thead>
    <tr>
        <th>ID</th>
        <th>Usuário ID</th>
        <th>Tipo</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>
</thead>
<tbody>
@forelse($prestadores as $p)
<tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->usuario_id }}</td>
    <td>{{ $p->tipo }}</td>
    <td>{{ $p->valor }}</td>
    <td>{{ Str::limit($p->descricao, 40) }}</td>
    <td>
        <a href="{{ route('prestador.show', $p->id) }}">Ver</a> |
        <a href="{{ route('prestador.edit', $p->id) }}">Editar</a> |
        <form action="{{ route('prestador.destroy', $p->id) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button onclick="return confirm('Excluir prestador?')">Excluir</button>
        </form>
    </td>
</tr>
@empty
    <tr><td colspan="6">Nenhum prestador cadastrado.</td></tr>
@endforelse
</tbody>
</table>
@endsection
