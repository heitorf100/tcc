@extends('layouts.app')

@section('content')
<h1>Avaliações</h1>

<a href="{{ route('avaliacao.create') }}">Nova Avaliação</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="6" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Agendamento</th>
            <th>Nota</th>
            <th>Data</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @forelse($avaliacoes as $avaliacao)
        <tr>
            <td>{{ $avaliacao->id }}</td>
            <td>{{ $avaliacao->agendamento_id ?? '-' }}</td>
            <td>{{ $avaliacao->nota ?? '-' }}</td>
            <td>{{ isset($avaliacao->data_avaliacao) ? \Carbon\Carbon::parse($avaliacao->data_avaliacao)->format('d/m/Y') : '-' }}</td>
            <td>
                <a href="{{ route('avaliacao.show', $avaliacao->id) }}">Ver</a> |
                <a href="{{ route('avaliacao.edit', $avaliacao->id) }}">Editar</a> |
                <form action="{{ route('avaliacao.destroy', $avaliacao->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Confirma exclusão?')">Excluir</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="5">Nenhuma avaliação encontrada.</td></tr>
    @endforelse
    </tbody>
</table>
@endsection
