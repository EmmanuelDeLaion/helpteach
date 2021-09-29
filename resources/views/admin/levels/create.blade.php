@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')
    <h1>Crear nuevo nivel</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.levels.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Titulo') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del nivel']) !!}
                @error('name')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            {!! Form::submit('Crear nivel', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
