<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>

        {!! Form::open(['url' => 'categoria/' . $categoria->id, 'method' => 'put']) !!}

        {{ Form::label('nome', 'Nome:') }}<br>
        {{ Form::text('nome', $categoria->nome) }}<br>

        {{ Form::submit('Enviar') }}

        {!! Form::close() !!}

    </body>
</html>