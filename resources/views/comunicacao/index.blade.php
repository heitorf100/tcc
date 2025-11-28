@extends('layouts.app')

@section('content')
<h1>Comunicações</h1>

<a href="{{ route('comunicacao.create') }}">Nova Mensagem</a>

<table border="1" cellpadding="6" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Remetente</th>
            <th>Destinatário</th>
            <th>Mensagem</th>
            <th>Data de Envio</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($comunicacoes as $com)
        <tr>
            <td>{{ $com->id }}</td>
            <td>{{ $com->remetente_id }}</td>
            <td>{{ $com->destinatario_id }}</td>
            <td>{{ Str::limit($com->mensagem, 40) }}</td>
            <td>{{ $com->data_envio }}</td>
            <td>
                <a href="{{ route('comunicacao.show', $com->id) }}">Ver</a> |
                <a href="{{ route('comunicacao.edit', $com->id) }}">Editar</a> |
                <form action="{{ route('comunicacao.destroy', $com->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Excluir mensagem?')">Excluir</button>
                </form>
            </td>
        </tr>
        @empty
            <tr><td colspan="6">Nenhuma comunicação encontrada.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
