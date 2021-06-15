@extends('adminlte::page')
@section('title', 'HelpTeach')
@section('content_header')
    <h1>Crear nuevo Rol</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}

            @include('admin.roles.components.form')
           
            {!! Form::submit('Crear rol', ['class' => 'btn btn-success mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        (function() {
            $(function() {
                $('#ventana-modal').modal()
            });
        }());

    </script>
@stop
