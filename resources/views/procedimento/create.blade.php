@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Novo Procedimento</h2>

    <form action="{{ route('procedimento.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label>Nome do Procedimento</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="form-group mt-3">
            <label>Duração (minutos)</label>
            <input type="number" name="duracao_minutos" class="form-control">
        </div>

        <button type="submit" class="btn btn-success mt-3">Salvar</button>
        <a href="{{ route('procedimento.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </form>
</div>
@endsection
