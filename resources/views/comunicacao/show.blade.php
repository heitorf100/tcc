@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mensagem #{{ $comunicacao->id }}</h1>

    <p><strong>Cliente:</strong> {{ $comunicacao->cliente->nome ?? "—" }}</p>
    <p><strong>Prestador:</strong> {{ $comunicacao->prestador->nome ?? "—" }}</p>
    <p><strong>Mensagem:</strong> {{ $comunicacao->mensagem }}</p>
    <p><strong>Lido:</strong> {{ $comunicacao->lido ? "Sim" : "Não" }}</p>
    <p><strong>Criado em:</strong> {{ $comunicacao->created_at }}</p>

    <a href="{{ route('comunicacao.edit', $comunicacao->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('comunicacao.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
