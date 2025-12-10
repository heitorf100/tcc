@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agendamentos</h1>

    <a href="{{ route('agendamento.create') }}" class="btn btn-primary mb-3">Novo Agendamento</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Prestador</th>
                <th>Serviço</th>
                <th>Data e Hora</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamentos as $a)
            <tr>
                <td>{{ $a->id }}</td>
                <td>{{ $a->cliente->nome ?? '—' }}</td>
                <td>{{ $a->prestador->nome ?? '—' }}</td>
                <td>{{ $a->servico->nome ?? '—' }}</td>
                <td>{{ $a->data_hora }}</td>
                <td>{{ $a->status }}</td>
                <td>
                    <a href="{{ route('agendamento.show', $a->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('agendamento.edit', $a->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('agendamento.destroy', $a->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Deseja excluir?')" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $agendamentos->links() }}
</div>
@endsection
