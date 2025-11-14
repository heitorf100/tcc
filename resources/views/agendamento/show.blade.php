@extends('layouts.app')

@section('content')
<h1>Agendamento #{{ $agendamento->id }}</h1>

<pre>{{ json_encode($agendamento->toArray(), JSON_PRETTY_PRINT) }}</pre>

<a href="{{ route('agendamento.index') }}">Voltar</a>
@endsection
