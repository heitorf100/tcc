@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Prestador: {{ $prestador->nome }}</h1>
  <p><strong>Email:</strong> {{ $prestador->email }}</p>
  <p><strong>Telefone:</strong> {{ $prestador->telefone }}</p>
  <p><strong>Valor/h:</strong> {{ $prestador->valor_hora }}</p>
  <a class="btn btn-secondary" href="{{ route('prestador.index') }}">Voltar</a>
</div>
@endsection
