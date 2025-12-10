@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Clientes</h1>

  <a href="{{ route('cliente.create') }}" class="btn btn-primary mb-3">Novo Cliente</a>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <table class="table table-sm table-bordered">
    <thead>
      <tr><th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Ações</th></tr>
    </thead>
    <tbody>
      @foreach($clientes as $c)
        <tr>
          <td>{{ $c->id }}</td>
          <td>{{ $c->nome }}</td>
          <td>{{ $c->email }}</td>
          <td>{{ $c->telefone }}</td>
          <td style="white-space:nowrap">
            <a class="btn btn-sm btn-info" href="{{ route('cliente.show', $c->id) }}">Ver</a>
            <a class="btn btn-sm btn-warning" href="{{ route('cliente.edit', $c->id) }}">Editar</a>
            <form action="{{ route('cliente.destroy', $c->id) }}" method="POST" style="display:inline">
              @csrf @method('DELETE')
              <button class="btn btn-sm btn-danger" onclick="return confirm('Confirma exclusão?')">Excluir</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {{ $clientes->links() }}
</div>
@endsection
