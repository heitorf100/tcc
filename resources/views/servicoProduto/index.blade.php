@extends('layouts.app')

@section('content')
<h1>Serviços / Produtos</h1>

<a href="{{ route('servicoProduto.create') }}">Novo</a>

<table border="1" cellpadding="6" cellspacing="0" width="100%">
<thead>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Valor</th>
    <th>Categoria ID</th>
    <th>Ações</th>
</tr>
</thead>
<tbody>
@forelse($servicos as $s)
<tr>
    <td>{{ $s->id }}</td>
    <td>{{ $s->nome }}</td>
    <td>{{ $s->valor }}</td>
    <td>{{ $s->categoria_id }}</td>
    <td>
        <a href="{{ route('servicoProduto.show', $s->id) }}">Ver</a> |
        <a href="{{ route('servicoProduto.edit', $s->id) }}">Editar</a> |
        <form action="{{ route('servicoProduto.destroy', $s->id) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button onclick="return confirm('Excluir?')">Excluir</button>
        </form>
    </td>
</tr>
@empty
<tr><td colspan="5">Nenhum registro encontrado.</td></tr>
@endforelse
</tbody>
</table>
@endsection
