<div>
    <div x-data="{open: false}" class="bg-purple-200 p-2 m-2 rounded-sm mt-1">
        <div class="px-4">
            <header class="flex items-center justify-between">
                <div>
                    <h1 x-on:click="open = !open" class="text-md font-bold cursor-pointer hover:text-purple-500">Descripción de la lección
                    </h1>
                </div>
                <div>
                    <p x-on:click="open = !open" class="cursor-pointer text-purple-500" cursor-pointer"">
                        <i class="fas fa-chevron-down"></i>
                    </p>
                </div>

            </header>

            <div x-show="open">
                @if ($lesson->description)
                    <form wire:submit.prevent="update" class="mt-2 text-sm">
                        <textarea wire:model="description.name" placeholder="Agregue una descripción a la lección"
                            class="form-input w-full"></textarea>
                        @error('description.name')
                            <span class="font-bold text-red-600">El campo es requerido</span>
                        @enderror
                        <div class="flex my-2 justify-end">
                            <button type="submit" class="btn-primario">Editar</button>
                            <button wire:click="destroy" class="btn-primario-outline-red ml-1">Eliminar</button>
                        </div>
                    </form>
                @else

                    <div>
                        <textarea wire:model="name" placeholder="Agregue una descripción a la lección"
                            class="form-input w-full"></textarea>
                        @error('name')
                            <span class="font-bold text-red-600">El campo es requerido</span>
                        @enderror
                        <div class="flex my-2 justify-end">
                            <button wire:click="store" class="btn-primario">Agregar</button>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>
</div>
