@extends('adminlte::page')

@section('content')


        Formulário - CREATE

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(['url' => 'categoria/create']) !!}

        {{ Form::label('nome', 'Nome:') }}<br>
        {{ Form::text('nome') }}<br>

        {{ Form::submit('Enviar') }}

        {!! Form::close() !!}


@endsection