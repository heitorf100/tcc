@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Categoria: {{ $categoria->nome }}</h1>
  <p>{{ $categoria->descricao }}</p>
  <a class="btn btn-secondary" href="{{ route('categoria.index') }}">Voltar</a>
</div>
@endsection
