@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h1>Lista de precios</h1>
        </div>
        <div>
            @if (session('info-create-price'))
                <div class="alert alert-success alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link"> ¡Creado correctamente!</a>.
                    {{ session('info-create-price') }}
                </div>
            @endif

            @if (session('info-update-price'))
                <div class="alert alert-success alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link"> ¡Actualizado correctamente!</a>.
                    {{ session('info-update-price') }}
                </div>
            @endif

            @if (session('info-delete-price'))
                <div class="alert alert-danger alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link"> ¡Eliminado correctamente!</a>.
                    {{ session('info-delete-price') }}
                </div>
            @endif

        </div>
    </div>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('admin.prices.create') }}"><i class="fas fa-plus"></i> Crear
                precio</a>
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
                    @foreach ($prices as $price)
                        <tr>
                            <td>{{ $price->id }}</td>
                            <td>{{ $price->name }}</td>

                            <td width="10px">
                                <a class="btn btn-primary" href="{{ route('admin.prices.edit', $price) }}">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{ route('admin.prices.destroy', $price) }}" method="POST">
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
