@extends('layouts.app')

@section('content')
<h1>Comunicação #{{ $comunicacao->id }}</h1>

<p><strong>Remetente (ID):</strong> {{ $comunicacao->remetente_id }}</p>
<p><strong>Destinatário (ID):</strong> {{ $comunicacao->destinatario_id }}</p>
<p><strong>Mensagem:</strong> {{ $comunicacao->mensagem }}</p>
<p><strong>Data de envio:</strong> {{ $comunicacao->data_envio }}</p>

<a href="{{ route('comunicacao.edit', $comunicacao->id) }}">Editar</a> |
<a href="{{ route('comunicacao.index') }}">Voltar</a>
@endsection
