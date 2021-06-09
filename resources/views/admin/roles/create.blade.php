@extends('adminlte::page')

@section('title', 'HelpTeach')

@section('content_header')
    <h1>Crear nuevo Rol</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Escriba el nombre']) !!}
            </div>

            @error('name')


                <!-- Modal -->
                <div class="modal" tabindex="-1" id="ventana-modal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Error</h5>
                            </div>
                            <div class="modal-body">
                                <p>{{ $message }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            @enderror


            <strong>Permisos</strong>

            @foreach ($permissions as $permission)
                <div>
                    <label>
                        {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                        {{ $permission->name }}
                    </label>
                </div>

            @endforeach

            {!! Form::submit('Crear rol', ['class' => 'btn btn-success mt-2']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log("hola");

        (function() {
            $(function() {
                $('#ventana-modal').modal()
            });
        }());

    </script>
@stop
