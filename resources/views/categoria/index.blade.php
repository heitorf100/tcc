@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Categorias</h1>
  <a href="{{ route('categoria.create') }}" class="btn btn-primary mb-3">Nova</a>
  @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
  <table class="table table-sm table-bordered">
    <thead><tr><th>ID</th><th>Nome</th><th>Ações</th></tr></thead>
    <tbody>
      @foreach($items as $it)
        <tr>
          <td>{{ $it->id }}</td>
          <td>{{ $it->nome }}</td>
          <td>
            <a class="btn btn-sm btn-info" href="{{ route('categoria.show',$it->id) }}">Ver</a>
            <a class="btn btn-sm btn-warning" href="{{ route('categoria.edit',$it->id) }}">Editar</a>
            <form action="{{ route('categoria.destroy',$it->id) }}" method="POST" style="display:inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Excluir</button></form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $items->links() }}
</div>
@endsection
