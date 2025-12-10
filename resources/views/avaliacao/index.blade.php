@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Avaliações</h1>

    <a href="{{ route('avaliacao.create') }}" class="btn btn-primary mb-3">Nova Avaliação</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Prestador</th>
                <th>Nota</th>
                <th>Comentário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($avaliacoes as $a)
            <tr>
                <td>{{ $a->id }}</td>
                <td>{{ $a->cliente->nome ?? '—' }}</td>
                <td>{{ $a->prestador->nome ?? '—' }}</td>
                <td>{{ $a->nota }}</td>
                <td>{{ Str::limit($a->comentario, 30) }}</td>
                <td>
                    <a href="{{ route('avaliacao.show', $a->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('avaliacao.edit', $a->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form method="POST" action="{{ route('avaliacao.destroy', $a->id) }}" style="display:inline-block">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Excluir?')" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $avaliacoes->links() }}
</div>
@endsection
