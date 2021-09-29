@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h1>Lista de niveles</h1>
        </div>
        <div>
            @if (session('info-create-level'))
                <div class="alert alert-success alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link"> ¡Creado correctamente!</a>.
                    {{ session('info-create-level') }}
                </div>
            @endif

            @if (session('info-update-level'))
                <div class="alert alert-success alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link"> ¡Actualizado correctamente!</a>.
                    {{ session('info-update-level') }}
                </div>
            @endif

            @if (session('info-delete-level'))
                <div class="alert alert-danger alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link"> ¡Eliminado correctamente!</a>.
                    {{ session('info-delete-level') }}
                </div>
            @endif

        </div>
    </div>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.levels.create') }}"><i class="fas fa-plus"></i> Crear
                nivel</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($levels as $level)
                        <tr>
                            <td>{{ $level->id }}</td>
                            <td>{{ $level->name }}</td>

                            <td width="10px">
                                <a class="btn btn-primary" href="{{ route('admin.levels.edit', $level) }}">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{ route('admin.levels.destroy', $level) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
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
