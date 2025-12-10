@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Comunicação</h1>

    <form action="{{ route('comunicacao.update', $comunicacao->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Cliente (opcional)</label>
        <select name="cliente_id" class="form-control mb-2">
            <option value="">Nenhum</option>
            @foreach($clientes as $c)
                <option value="{{ $c->id }}" @selected($c->id == $comunicacao->cliente_id)>
                    {{ $c->nome }}
                </option>
            @endforeach
        </select>

        <label>Prestador (opcional)</label>
        <select name="prestador_id" class="form-control mb-2">
            <option value="">Nenhum</option>
            @foreach($prestadores as $p)
                <option value="{{ $p->id }}" @selected($p->id == $comunicacao->prestador_id)>
                    {{ $p->nome }}
                </option>
            @endforeach
        </select>

        <label>Mensagem</label>
        <textarea class="form-control mb-2" name="mensagem" required>{{ $comunicacao->mensagem }}</textarea>

        <label>Lido?</label>
        <select name="lido" class="form-control mb-3">
            <option value="0" @selected(!$comunicacao->lido)>Não</option>
            <option value="1" @selected($comunicacao->lido)>Sim</option>
        </select>

        <button class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
