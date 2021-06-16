@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')

    <div class="d-flex justify-content-between">
        <div>
            <h1>Editar rol</h1>
        </div>
        <div>
            @if (session('info-edit'))
                <div class="alert alert-success alerta-info" role="alert">
                    <a href="#" class="alert-link">¡Actualizado correctamente!</a>. {{ session('info-edit') }}
                </div>
            @endif
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

            @include('admin.roles.components.form')

            {!! Form::submit('Actualizar rol', ['class' => 'btn btn-success mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".alerta-info").fadeOut(1000);
            }, 3000);
        });

    </script>
@stop
