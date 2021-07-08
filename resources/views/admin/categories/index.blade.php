@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h1>Lista de categorias</h1>
        </div>
        <div>
            @if (session('info-create-category'))
                <div class="alert alert-success alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link"> ¡Creada correctamente!</a>.
                    {{ session('info-create-category') }}
                </div>
            @endif

            @if (session('info-update-category'))
                <div class="alert alert-success alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link"> ¡Actualizada correctamente!</a>.
                    {{ session('info-update-category') }}
                </div>
            @endif

            @if (session('info-delete-category'))
                <div class="alert alert-danger alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link"> ¡Eliminada correctamente!</a>.
                    {{ session('info-delete-category') }}
                </div>
            @endif
        </div>
    </div>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.categories.create') }}"><i class="fas fa-plus"></i> Crear
                categoria</a>
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
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>

                            <td width="10px">
                                <a class="btn btn-primary"
                                    href="{{ route('admin.categories.edit', $category) }}">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
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
