@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nova Avaliação</h1>

    <form action="{{ route('avaliacao.store') }}" method="POST">
        @csrf

        <label>Cliente</label>
        <select name="cliente_id" class="form-control mb-2">
            @foreach($clientes as $c)
                <option value="{{ $c->id }}">{{ $c->nome }}</option>
            @endforeach
        </select>

        <label>Prestador</label>
        <select name="prestador_id" class="form-control mb-2">
            @foreach($prestadores as $p)
                <option value="{{ $p->id }}">{{ $p->nome }}</option>
            @endforeach
        </select>

        <label>Agendamento (opcional)</label>
        <select name="agendamento_id" class="form-control mb-2">
            <option value="">Nenhum</option>
            @foreach($agendamentos as $ag)
                <option value="{{ $ag->id }}">#{{ $ag->id }} - {{ $ag->data_hora }}</option>
            @endforeach
        </select>

        <label>Nota</label>
        <input type="number" step="0.1" max="5" min="0" name="nota" class="form-control mb-2">

        <label>Comentário</label>
        <textarea name="comentario" class="form-control mb-3"></textarea>

        <button class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
