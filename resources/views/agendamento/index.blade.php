@extends('layouts.app')

@section('content')
<h1>Agendamentos</h1>

<a href="{{ route('agendamento.create') }}">Novo Agendamento</a>

@if(session('success')) <p>{{ session('success') }}</p> @endif

<table border="1" cellpadding="6">
    <tr><th>ID</th><th>Resumo</th><th>Ações</th></tr>
    @foreach($agendamentos as $a)
    <tr>
        <td>{{ $a->id }}</td>
        <td>{{ json_encode($a->toArray()) }}</td>
        <td>
            <a href="{{ route('agendamento.show', $a->id) }}">Ver</a> |
            <a href="{{ route('agendamento.edit', $a->id) }}">Editar</a> |
            <form action="{{ route('agendamento.destroy', $a->id) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button onclick="return confirm('Excluir?')">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
