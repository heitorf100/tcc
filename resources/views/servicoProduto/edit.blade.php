@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Serviço/Produto</h1>

    <form action="{{ route('servicoProduto.update', $servicoProduto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $servicoProduto->nome }}" required>
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control">{{ $servicoProduto->descricao }}</textarea>
        </div>

        <div class="mb-3">
            <label>Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control" value="{{ $servicoProduto->preco }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('servicoProduto.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
