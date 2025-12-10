@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Serviços / Produtos</h1>

    <a href="{{ route('servicoProduto.create') }}" class="btn btn-primary mb-3">Novo Serviço/Produto</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($servicoProdutos as $sp)
            <tr>
                <td>{{ $sp->id }}</td>
                <td>{{ $sp->nome }}</td>
                <td>R$ {{ number_format($sp->preco, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('servicoProduto.show', $sp->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('servicoProduto.edit', $sp->id) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('servicoProduto.destroy', $sp->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir?')">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $servicoProdutos->links() }}
</div>
@endsection
