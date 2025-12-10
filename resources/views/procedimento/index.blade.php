@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Procedimentos</h2>

    <a href="{{ route('procedimento.create') }}" class="btn btn-primary mb-3">Novo Procedimento</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Duração (min)</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($procedimentos as $p)
                <tr>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->duracao_minutos }}</td>
                    <td>
                        <a href="{{ route('procedimento.show', $p->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('procedimento.edit', $p->id) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('procedimento.destroy', $p->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Excluir procedimento?')" class="btn btn-sm btn-danger">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">Nenhum procedimento encontrado.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $procedimentos->links() }}
</div>
@endsection
