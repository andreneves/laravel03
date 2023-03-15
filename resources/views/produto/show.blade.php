<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    Produto - show<br>

        <b>Categoria:</b> {{ $produto->categoria->nome }}<br>
        <b>Nome:</b> {{ $produto->nome }}<br>
        <b>Quantidade</b> {{ $produto->quantidade }}<br>
        <b>Valor</b> {{ $produto->valor }}<br>

    </body>
</html>