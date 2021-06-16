@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')

    <div class="d-flex justify-content-between">
        <div>
            <h1>Asignar rol</h1>
        </div>
        <div>
            @if (session('info-rol-asignado'))
                <div class="alert alert-success alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link">¡Asignado correctamente!</a>. {{ session('info-rol-asignado') }}
                </div>
            @endif
        </div>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="text-bold">Nombre</h5>
            <p class="form-control">{{ $user->name }}</p>

            <h5>Lista de roles</h5>

            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

            @foreach ($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{ $role->name }}
                    </label>
                </div>

            @endforeach

            {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}

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
