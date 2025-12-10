@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nova Comunicação</h1>

    <form action="{{ route('comunicacao.store') }}" method="POST">
        @csrf

        <label>Cliente (opcional)</label>
        <select name="cliente_id" class="form-control mb-2">
            <option value="">Nenhum</option>
            @foreach($clientes as $c)
                <option value="{{ $c->id }}">{{ $c->nome }}</option>
            @endforeach
        </select>

        <label>Prestador (opcional)</label>
        <select name="prestador_id" class="form-control mb-2">
            <option value="">Nenhum</option>
            @foreach($prestadores as $p)
                <option value="{{ $p->id }}">{{ $p->nome }}</option>
            @endforeach
        </select>

        <label>Mensagem</label>
        <textarea class="form-control mb-2" name="mensagem" required></textarea>

        <label>Lido?</label>
        <select name="lido" class="form-control mb-3">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>

        <button class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
