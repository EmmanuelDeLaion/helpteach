@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')
    <h1>Cursos pendientes de aprobación</h1>
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
                                    <a class="btn btn-primary" href="">Revisar</a>
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
    <script>
        console.log('Hi!');
    </script>
@stop
