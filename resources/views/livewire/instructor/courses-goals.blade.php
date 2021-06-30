<section>
    <h1 class="text-2xl font-bold text-gray-800 mt-2">Metas del curso</h1>
    <hr class="mt-2 mb-6">


    @foreach ($course->goals as $item)
        <div x-data="{open:false}" class="rounded-lg border border-purple-400 mt-2">
            <div class="lg:flex shadow items-center">
                <div class="bg-purple-500 rounded-lg lg:w-2/12 p-4 block  md:ml-2 h-full shadow-inner">
                    <div class="text-center">
                        <div class="text-white font-bold">Meta:</div>
                    </div>
                </div>

                @if ($goal->id == $item->id)
                    <div class="w-full  lg:w-11/12 xl:w-full px-1 bg-white py-5 lg:px-2 lg:py-2 tracking-wide">
                        <div class="flex flex-row lg:justify-start justify-center">
                            <div class="text-gray-400 font-normal text-sm text-center lg:text-left px-2">
                                <i class="far fa-clock"></i> Fecha de creación: {{ $item->created_at }}
                            </div>
                        </div>
                        <form wire:submit.prevent="update">
                            <input wire:model="goal.name" placeholder="Ingrese el titulo de la meta"
                                class="w-full bg-white focus:outline-none text-gray-800 font-bold border rounded-sm py-2 px-2">
                            @error('goal.name')
                                <span class="font-bold text-red-400">Favor de ingrsar un titulo</span>
                            @enderror
                        </form>
                    </div>
                @else

                    <div class="w-full  lg:w-11/12 xl:w-full px-1 bg-white py-5 lg:px-2 lg:py-2 tracking-wide">
                        <div class="flex flex-row lg:justify-start justify-center">
                            <div class="text-gray-400 font-normal text-sm text-center lg:text-left px-2">
                                <i class="far fa-clock"></i> Fecha de creación: {{ $item->created_at }}
                            </div>
                        </div>
                        <div class="font-semibold text-gray-800 text-md text-center lg:text-left px-2">
                            {{ $item->name }}
                        </div>
                    </div>

                    <div
                        class="flex flex-row items-center w-full lg:w-1/3 bg-white lg:justify-end justify-center px-2 py-4 lg:px-0">
                        <button wire:click="edit({{ $item }})" class="btn-primario">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button wire:click="destroy({{ $item }})" class=" ml-1 mr-2 btn-primario-outline-red">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    @endforeach



    <div x-data="{open:false}">
        <h1 x-show="!open" x-on:click="open = true"
            class="text-md font-bold text-gray-800 mt-5 cursor-pointer hover:text-purple-500"><i
                class="fas fa-plus-circle"></i> Agregar nueva meta al curso</h1>
        <div class="shadow  rounded-lg border border-purple-400 mt-5" x-show="open">
            <div class="lg:flex items-center mt-2">
                <div class="bg-purple-500 rounded-lg lg:w-2/12 p-3 block  md:ml-2 h-full shadow-inner">
                    <div class="text-center">
                        <div class="text-white font-bold text-sm">Nueva Meta</div>
                    </div>
                </div>
                <div class="w-full  lg:w-11/12 xl:w-full px-1 bg-white py-5 lg:px-2 lg:py-2 tracking-wide">
                    <form wire:submit.prevent="update">
                        <input wire:model="name" placeholder="Ingrese el titulo de la meta"
                            class="w-full bg-white focus:outline-none text-sm text-gray-800 font-bold border rounded-sm   py-2 border  px-2">
                        @error('name')
                            <span class="font-bold text-red-400">Favor de ingresar un titulo a la meta</span>
                        @enderror
                    </form>
                </div>
            </div>

            <div class="flex justify-end mx-2 my-2">
                <button wire:click="store" class="  btn-primario">
                    Agregar
                </button>
                <button x-on:click="open = false" class="ml-1 btn-primario-outline-red">
                    Cancelar
                </button>
            </div>
        </div>
    </div>

</section>
