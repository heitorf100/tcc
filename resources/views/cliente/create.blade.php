@extends('layouts.app')

@section('content')
<h1>Novo Cliente</h1>

<form action="{{ route('cliente.store') }}" method="POST">
    @csrf

    <label for="nome">Nome completo</label><br>
    <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required><br><br>

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}"><br><br>

    <label for="telefone">Telefone</label><br>
    <input type="text" id="telefone" name="telefone" value="{{ old('telefone') }}"><br><br>

    <label for="cpf">CPF</label><br>
    <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}"><br><br>

    <label for="data_nascimento">Data de nascimento</label><br>
    <input type="date" id="data_nascimento" name="data_nascimento" value="{{ old('data_nascimento') }}"><br><br>

    <fieldset style="border:1px solid #ccc;padding:8px">
        <legend>Endereço</legend>

        <label for="logradouro">Logradouro</label><br>
        <input type="text" id="logradouro" name="logradouro" value="{{ old('logradouro') }}"><br><br>

        <label for="numero">Número</label><br>
        <input type="text" id="numero" name="numero" value="{{ old('numero') }}"><br><br>

        <label for="bairro">Bairro</label><br>
        <input type="text" id="bairro" name="bairro" value="{{ old('bairro') }}"><br><br>

        <label for="cidade">Cidade</label><br>
        <input type="text" id="cidade" name="cidade" value="{{ old('cidade') }}"><br><br>

        <label for="estado">Estado</label><br>
        <input type="text" id="estado" name="estado" value="{{ old('estado') }}"><br><br>

        <label for="cep">CEP</label><br>
        <input type="text" id="cep" name="cep" value="{{ old('cep') }}"><br><br>
    </fieldset>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('cliente.index') }}">Voltar</a>
@endsection
