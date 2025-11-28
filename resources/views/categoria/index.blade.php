@extends('layouts.app')

@section('content')
<h1>Categorias</h1>

<a href="{{ route('categoria.create') }}">Nova Categoria</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="6" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @forelse($categorias as $categoria)
        <tr>
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nome }}</td>
            <td>{{ $categoria->descricao }}</td>
            <td>
                <a href="{{ route('categoria.show', $categoria->id) }}">Ver</a> |
                <a href="{{ route('categoria.edit', $categoria->id) }}">Editar</a> |
                <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Excluir esta categoria?')">Excluir</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="4">Nenhuma categoria encontrada.</td></tr>
    @endforelse
    </tbody>
</table>

@endsection
