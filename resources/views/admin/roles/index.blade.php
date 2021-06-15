@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')
    <h1>Lista de roles</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success alerta-info" role="alert">
            <a href="#" class="alert-link">¡Creado correctamente!</a>. {{ session('info') }}
        </div>
    @endif

    @if(session('info-delete'))
        <div class="alert alert-danger alerta-info" role="alert">
            <a href="#" class="alert-link">¡Eliminado correctamente!</a>. {{ session('info-delete') }}
        </div>
    @endif



    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.roles.create') }}"><i class="fas fa-plus"></i> Crear Rol</a>
        </div>
        <div class="card-body">

            <table class="table table-striped">
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
                            <td width="10px">
                                <a class="btn btn-info" href="{{ route('admin.roles.edit', $role) }}">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Eliminar</button>
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
        $(document).ready(function () {
            setTimeout(function () {
                $(".alerta-info").fadeOut(1000); 
            },3000);
        });
    </script>
@stop
