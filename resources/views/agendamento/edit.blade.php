@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Agendamento</h1>

    <form action="{{ route('agendamento.update', $agendamento->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Cliente:</label>
        <select name="cliente_id" class="form-control mb-2">
            @foreach($clientes as $c)
                <option value="{{ $c->id }}" @selected($c->id == $agendamento->cliente_id)>
                    {{ $c->nome }}
                </option>
            @endforeach
        </select>

        <label>Prestador:</label>
        <select name="prestador_id" class="form-control mb-2">
            @foreach($prestadores as $p)
                <option value="{{ $p->id }}" @selected($p->id == $agendamento->prestador_id)>
                    {{ $p->nome }}
                </option>
            @endforeach
        </select>

        <label>Serviço:</label>
        <select name="servico_id" class="form-control mb-2">
            <option value="">Nenhum</option>
            @foreach($servicos as $s)
                <option value="{{ $s->id }}" @selected($s->id == $agendamento->servico_id)>
                    {{ $s->nome }}
                </option>
            @endforeach
        </select>

        <label>Data e Hora:</label>
        <input type="datetime-local" name="data_hora" class="form-control mb-2"
            value="{{ date('Y-m-d\TH:i', strtotime($agendamento->data_hora)) }}">

        <label>Status:</label>
        <select name="status" class="form-control mb-3">
            <option value="pendente" @selected($agendamento->status == 'pendente')>Pendente</option>
            <option value="confirmado" @selected($agendamento->status == 'confirmado')>Confirmado</option>
            <option value="cancelado" @selected($agendamento->status == 'cancelado')>Cancelado</option>
        </select>

        <button class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
