@extends('layouts.app')

@section('content')
<h1>Novo Agendamento</h1>

<form action="{{ route('agendamento.store') }}" method="POST">
    @csrf
    <!-- Substitua/adicione inputs reais do seu Model -->
    <label>Resumo (ex: observações)</label><br>
    <input type="text" name="descricao" value="{{ old('descricao') }}"><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('agendamento.index') }}">Voltar</a>
@endsection
