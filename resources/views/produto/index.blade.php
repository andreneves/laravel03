<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    Produtos<br>
    <a href="{{ url('produto/create') }}">CRIAR</a>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

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
      {!! Form::open(['url' => 'produto/' . $value->id, 'method' => 'delete']) !!}
      {{ Form::submit('EXCLUIR') }}
      {!! Form::close() !!}
    </td>
  </tr>
    @endforeach
</table>

    </body>
</html>
