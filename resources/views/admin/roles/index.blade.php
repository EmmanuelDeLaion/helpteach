@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h1>Lista de roles</h1>
        </div>
        <div>
            @if (session('info'))
                <div class="alert alert-success alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link">¡Creado correctamente!</a>. {{ session('info') }}
                </div>
            @endif

            @if (session('info-delete'))
                <div class="alert alert-danger alerta-info" role="alert">
                    <i class="fas fa-trash-alt"></i> <a href="#" class="alert-link">¡Eliminado correctamente!</a>. {{ session('info-delete') }}
                </div>
            @endif
        </div>
    </div>

@stop

@section('content')





    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.roles.create') }}"><i class="fas fa-plus"></i> Crear Rol</a>
        </div>
        <div class="card-body">

            <table class="table table-striped table-responsive-sm table-responsive-md">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Opciones</td>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td width="15%">
                                <a class="btn btn-info" href="{{ route('admin.roles.edit', $role) }}"><i class="fas fa-edit"></i> Editar</a>
                            </td>

                            <td width="15%">
                                <form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay ningún rol registrado</td>
                        </tr>

                    @endforelse

                </tbody>
            </table>

        </div>
        </>
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
