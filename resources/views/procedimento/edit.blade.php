@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Procedimento</h2>

    <form action="{{ route('procedimento.update', $procedimento->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" value="{{ $procedimento->nome }}" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control">{{ $procedimento->descricao }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label>Duração (minutos)</label>
            <input type="number" name="duracao_minutos" value="{{ $procedimento->duracao_minutos }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
        <a href="{{ route('procedimento.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </form>
</div>
@endsection
