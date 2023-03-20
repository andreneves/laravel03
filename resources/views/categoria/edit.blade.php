@extends('adminlte::page')

@section('content')


        {!! Form::open(['url' => 'categoria/' . $categoria->id, 'method' => 'put']) !!}

        {{ Form::label('nome', 'Nome:') }}<br>
        {{ Form::text('nome', $categoria->nome) }}<br>

        {{ Form::submit('Enviar') }}

        {!! Form::close() !!}

@endsection