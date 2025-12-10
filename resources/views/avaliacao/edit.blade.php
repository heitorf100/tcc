@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Avaliação</h1>

    <form action="{{ route('avaliacao.update', $avaliacao->id) }}" method="POST">
        @csrf @method('PUT')

        <label>Cliente</label>
        <select name="cliente_id" class="form-control mb-2">
            @foreach($clientes as $c)
                <option value="{{ $c->id }}" @selected($c->id == $avaliacao->cliente_id)>
                    {{ $c->nome }}
                </option>
            @endforeach
        </select>

        <label>Prestador</label>
        <select name="prestador_id" class="form-control mb-2">
            @foreach($prestadores as $p)
                <option value="{{ $p->id }}" @selected($p->id == $avaliacao->prestador_id)>
                    {{ $p->nome }}
                </option>
            @endforeach
        </select>

        <label>Agendamento</label>
        <select name="agendamento_id" class="form-control mb-2">
            <option value="">Nenhum</option>
            @foreach($agendamentos as $ag)
                <option value="{{ $ag->id }}" @selected($ag->id == $avaliacao->agendamento_id)>
                    #{{ $ag->id }} - {{ $ag->data_hora }}
                </option>
            @endforeach
        </select>

        <label>Nota</label>
        <input type="number" name="nota" step="0.1" max="5" min="0" class="form-control mb-2" value="{{ $avaliacao->nota }}">

        <label>Comentário</label>
        <textarea name="comentario" class="form-control mb-3">{{ $avaliacao->comentario }}</textarea>

        <button class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
