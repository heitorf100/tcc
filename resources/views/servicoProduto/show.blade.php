@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Serviço/Produto</h1>

    <div class="card">
        <div class="card-body">

            <p><strong>ID:</strong> {{ $servicoProduto->id }}</p>
            <p><strong>Nome:</strong> {{ $servicoProduto->nome }}</p>
            <p><strong>Descrição:</strong> {{ $servicoProduto->descricao }}</p>
            <p><strong>Preço:</strong> R$ {{ number_format($servicoProduto->preco, 2, ',', '.') }}</p>

        </div>
    </div>

    <a href="{{ route('servicoProduto.index') }}" class="btn btn-secondary mt-3">Voltar</a>
</div>
@endsection
