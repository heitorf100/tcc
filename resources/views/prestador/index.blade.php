@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Prestadores</h1>
  <a href="{{ route('prestador.create') }}" class="btn btn-primary mb-3">Novo</a>

  @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

  <table class="table table-sm table-bordered">
    <thead><tr><th>ID</th><th>Nome</th><th>Email</th><th>Valor/h</th><th>Ações</th></tr></thead>
    <tbody>
      @foreach($prestadores as $p)
        <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->nome }}</td>
          <td>{{ $p->email }}</td>
          <td>{{ $p->valor_hora }}</td>
          <td>
            <a class="btn btn-sm btn-info" href="{{ route('prestador.show',$p->id) }}">Ver</a>
            <a class="btn btn-sm btn-warning" href="{{ route('prestador.edit',$p->id) }}">Editar</a>
            <form action="{{ route('prestador.destroy', $p->id) }}" method="POST" style="display:inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Excluir</button></form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {{ $prestadores->links() }}
</div>
@endsection
