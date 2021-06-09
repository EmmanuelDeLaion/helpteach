@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')
    <h1>Lista de roles</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.roles.create') }}"><i class="fas fa-plus"></i> Crear
                curso</a>
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
                            <td>
                                <a class="btn btn-info" href="{{ route('admin.roles.edit', $role) }}">Editar</a>
                            </td>

                            <td>
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
