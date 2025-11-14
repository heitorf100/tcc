@extends('layouts.app')

@section('content')
<h1>Editar Agendamento</h1>

<form action="{{ route('agendamento.update', $agendamento->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Ajuste campos conforme seu Model -->
    <label>Descrição</label><br>
    <input type="text" name="descricao" value="{{ old('descricao', $agendamento->descricao ?? '') }}"><br><br>

    <button type="submit">Atualizar</button>
</form>

<a href="{{ route('agendamento.index') }}">Voltar</a>
@endsection
