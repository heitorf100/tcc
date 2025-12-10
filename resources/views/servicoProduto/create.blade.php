@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Serviço/Produto</h1>

    <form action="{{ route('servicoProduto.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('servicoProduto.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
