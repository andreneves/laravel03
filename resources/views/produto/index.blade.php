@extends('adminlte::page')

@section('content')

    Produtos<br>
    @can('is_admin')
    <a href="{{ url('produto/create') }}">CRIAR</a>
    @endcan

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <script>
    function ConfirmDelete() {
        return confirm('Tem certeza que deseja excluir este registro?');
    }
  </script>

    <table>
  <tr>
    <th>Categoria</th>
    <th>Nome</th>
    <th>Ação</th>
  </tr>
    @foreach ($produtos as $value)
  <tr>
    <td>{{ $value->categoria->nome }}</td>
    <td>{{ $value->nome }}</td>
    <td>
      <a href="{{ url('produto/' . $value->id) }}">Visualizar</a>
      <a href="{{ url('produto/' . $value->id . '/edit') }}">Editar</a>
      {!! Form::open(['url' => 'produto/' . $value->id, 'method' => 'delete', 'onsubmit' => 'return ConfirmDelete()']) !!}
      {{ Form::submit('EXCLUIR') }}
      {!! Form::close() !!}
    </td>
  </tr>
    @endforeach
</table>

@endsection
