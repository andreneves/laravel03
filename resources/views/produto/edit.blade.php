@extends('adminlte::page')

@section('content')


        {!! Form::open(['url' => 'produto/' . $produto->id, 'method' => 'put']) !!}

        {{ Form::label('categoria', 'Categoria:') }}<br>
        {{ Form::select('categoria_id', $categorias, $produto->categoria->id) }}<br>

        {{ Form::label('nome', 'Nome:') }}<br>
        {{ Form::text('nome', $produto->nome) }}<br>

        {{ Form::label('quantidade', 'Quantidade:') }}<br>
        {{ Form::text('quantidade', $produto->quantidade) }}<br>

        {{ Form::label('valor', 'Valor:') }}<br>
        {{ Form::text('valor', $produto->valor) }}<br>

        {{ Form::submit('Enviar') }}

        {!! Form::close() !!}

@endsection