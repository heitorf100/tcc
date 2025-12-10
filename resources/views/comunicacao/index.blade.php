@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Comunicações</h1>

    <a href="{{ route('comunicacao.create') }}" class="btn btn-primary mb-3">Nova Mensagem</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Prestador</th>
                <th>Mensagem</th>
                <th>Lido?</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comunicacoes as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->cliente->nome ?? "—" }}</td>
                <td>{{ $c->prestador->nome ?? "—" }}</td>
                <td>{{ Str::limit($c->mensagem, 30) }}</td>
                <td>{{ $c->lido ? "Sim" : "Não" }}</td>
                <td>
                    <a href="{{ route('comunicacao.show', $c->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('comunicacao.edit', $c->id) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('comunicacao.destroy', $c->id) }}" method="POST" style="display:inline-block">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Excluir esta mensagem?')" class="btn btn-danger btn-sm">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $comunicacoes->links() }}
</div>
@endsection
