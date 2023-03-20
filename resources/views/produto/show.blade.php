@extends('adminlte::page')

@section('content')

    Produto - show<br>

        <b>Categoria:</b> {{ $produto->categoria->nome }}<br>
        <b>Nome:</b> {{ $produto->nome }}<br>
        <b>Quantidade</b> {{ $produto->quantidade }}<br>
        <b>Valor</b> {{ $produto->valor }}<br>

@endsection