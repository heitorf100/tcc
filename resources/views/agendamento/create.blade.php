@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Agendamento</h1>

    <form action="{{ route('agendamento.store') }}" method="POST">
        @csrf

        <label>Cliente:</label>
        <select name="cliente_id" class="form-control mb-2">
            @foreach($clientes as $c)
                <option value="{{ $c->id }}">{{ $c->nome }}</option>
            @endforeach
        </select>

        <label>Prestador:</label>
        <select name="prestador_id" class="form-control mb-2">
            @foreach($prestadores as $p)
                <option value="{{ $p->id }}">{{ $p->nome }}</option>
            @endforeach
        </select>

        <label>Serviço:</label>
        <select name="servico_id" class="form-control mb-2">
            <option value="">Nenhum</option>
            @foreach($servicos as $s)
                <option value="{{ $s->id }}">{{ $s->nome }}</option>
            @endforeach
        </select>

        <label>Data e Hora:</label>
        <input type="datetime-local" name="data_hora" class="form-control mb-2">

        <label>Status:</label>
        <select name="status" class="form-control mb-3">
            <option value="pendente">Pendente</option>
            <option value="confirmado">Confirmado</option>
            <option value="cancelado">Cancelado</option>
        </select>

        <button class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
