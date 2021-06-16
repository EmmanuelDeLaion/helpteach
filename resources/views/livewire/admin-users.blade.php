<div>
    <div class="card">

        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-control w-100" type="text" placeholder="Buscar por nombre o correo">
        </div>

        @if ($users->count())

            <div class="card-body">
                <table class="table table-striped table-responsive-sm table-responsive-md">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width="10px">
                                    <a href="{{ route('admin.users.edit', $user) }}"
                                        class="btn btn-primary">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer table-responsive-sm">
                {{ $users->links() }}
            </div>

            @else

            <div class="card-body">
                <strong>No hay coincidencias 😢</strong>
            </div>

        @endif


    </div>
</div>
