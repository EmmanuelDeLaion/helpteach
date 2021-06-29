<div>
    <div x-data="{open: false}" class="bg-purple-200 p-2 m-2 rounded-sm mt-1">
        <div class="">
            <header class="flex items-center justify-between">
                <div>
                    <h1 x-on:click="open = !open" class="text-md font-bold cursor-pointer hover:text-purple-500">
                        Recursos de la lección
                    </h1>
                </div>
                <div>
                    <p x-on:click="open = !open" class="cursor-pointer text-purple-500" cursor-pointer"">
                        <i class="fas fa-chevron-down"></i>
                    </p>
                </div>

            </header>

            <div x-show="open">
                @if ($lesson->resource)
                    <div class="flex items-center justify-between">
                        <div>
                            <h1>{{ $lesson->resource->url }}</h1>
                        </div>
                        <div>
                            <button wire:click="downloadResource" class="btn-primario">
                                <i class="fas fa-download"></i>
                            </button>
                            <button wire:click="destroy" class="btn-primario-outline-red">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                @else

                    <form wire:submit.prevent="save">
                        <div class="flex items-center">
                            <input wire:model="file" type="file" class="form-input flex-1">
                            <button type="submit" class="btn-primario ml-2">Guardar</button>
                        </div>

                        <div wire:loading wire:target="file" class="flex items-center  w-full h-full">
                            <div class="flex items-center space-x-1 text-sm font-bold text-purple-500">
                                <svg fill='none' class="w-6 h-6 animate-spin" viewBox="0 0 32 32"
                                    xmlns='http://www.w3.org/2000/svg'>
                                    <path clip-rule='evenodd'
                                        d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z'
                                        fill='currentColor' fill-rule='evenodd' />
                                </svg>
                                <div>Subiendo archivo ...</div>
                            </div>
                        </div>

                        @error('file')
                            <span class="text-sm text-red-500 font-bold">Campo requerido</span>
                        @enderror

                    </form>

                @endif
            </div>
        </div>
    </div>
</div>
