@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')

    <div class="d-flex justify-content-between">
        <div>
            <h1>Cursos pendientes de aprobación</h1>
        </div>
        <div>
            @if (session('info-approved'))
                <div class="alert alert-success alerta-info" role="alert">
                    <i class="fas fa-check"></i> <a href="#" class="alert-link">¡Aprobado correctamente!</a>.
                    {{ session('info-approved') }}
                </div>
            @endif

            @if (session('info-reject'))
            <div class="alert alert-danger alerta-info" role="alert">
                <i class="fas fa-check"></i> <a href="#" class="alert-link">Curso rechazado</a>.
                {{ session('info-approved') }}
            </div>
        @endif
        </div>
    </div>

@stop

@section('content')
    <p>Lista de cursos pendientes de arobación</p>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->category->name }}</td>
                                <td>
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.courses.show', $course) }}">Revisar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            <div class="card-footer">
                {{ $courses->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>



    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/instructor/courses/alerta.js') }}"></script>
@stop
