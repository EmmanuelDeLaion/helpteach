<div>
    @foreach ($section->lessons as $item)
        <div x-data="{open: false}" class="bg-purple-100 p-2 m-2 rounded-sm mt-1">

            <div class="flex items-center justify-between px-2">
                <div>
                    <h1 class="cursor-pointer hover:text-purple-500 hover:font-bold" x-on:click="open = !open">
                        <i class="fas fa-play-circle text-purple-500"></i> <span class="font-bold"> Lección:</span>
                        {{ $item->name }}
                    </h1>
                </div>
                <div>
                    <p x-on:click="open = !open" class="cursor-pointer text-purple-500" cursor-pointer"">
                        <i class="fas fa-chevron-down"></i>
                    </p>
                </div>
            </div>


            <hr class="my-2">

            <div x-show="open">

                @if ($lesson->id == $item->id)
                    <form wire:submit.prevent="update" class="px-2">
                        <div class="flex mt-1 items-center">
                            <label class="w-48 font-bold" for="">Nombre de la lección: </label>
                            <input wire:model="lesson.name"
                                class="w-full bg-white focus:outline-none text-sm text-gray-800 font-bold border rounded-sm"
                                placeholder="Ingrese el nombre de la lección" type="text">
                        </div>

                        @error('lesson.name')
                            <span class="text-xs text-red-500">Favor de ingresar el titulo de la lección</span>
                        @enderror

                        <div class="flex items-center mt-1">
                            <label class="w-48 font-bold">Plataforma:</label>
                            <div class="w-full  ">
                                <select wire:model="lesson.platform_id"
                                    class="block w-full bg-grey-lighter text-sm text-gray-800 font-bold border border-grey-lighter rounded-sm   md:w-full ">
                                    @foreach ($platforms as $platform)
                                        <option class="text-sm font-bold" value="{{ $platform->id }}">
                                            {{ $platform->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="flex mt-1 items-center">
                            <label class="w-48 font-bold" for="">URL: </label>
                            <input wire:model="lesson.url"
                                class="w-full bg-white focus:outline-none text-sm text-blue-400 font-bold border rounded-sm"
                                placeholder="Ingrese la URL del video" type="text">
                        </div>

                        @error('lesson.url')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="mt-4 flex justify-end">
                            <button type="submit" class="btn-primario ">Actualizar</button>
                            <button wire:click="cancel" type="button"
                                class="btn-primario-outline-red ml-1">Cancelar</button>
                        </div>

                    </form>


                @else

                    <div class="my-2 px-2">
                        <p>Plataforma: {{ $item->platform->name }}</p>
                        <a href="{{ $item->url }}" target="_blanck">Enlace: <span class="text-blue-400">
                                {{ $item->url }}</span> </a>
                        <div class="flex my-2">
                            <button wire:click="edit({{ $item }})" class="btn-primario ">Editar</button>
                            <button wire:click="destroy({{ $item }})"
                                class="btn-primario-outline-red ml-1">Eliminar</button>
                        </div>
                        <div>
                            @livewire('instructor.lesson-description', ['lesson' => $item], key($item->id))
                        </div>
                    </div>

                @endif

            </div>

        </div>

    @endforeach

    <div x-data="{open:false}">
        <h1 x-show="!open" x-on:click="open = true"
            class="text-md font-bold text-gray-800 mt-5 p-2 my-2 cursor-pointer hover:text-purple-500"><i
                class="fas fa-plus-circle"></i> Agregar nueva lección</h1>

        <div class="shadow  rounded-lg border border-purple-400 mt-5 my-2" x-show="open">

            <div class="container items-center mt-2">
                <div class="bg-purple-500 rounded-lg lg:w-2/12 p-3 block mt-2  md:ml-2 h-full shadow-inner">
                    <div class="text-center">
                        <div class="text-white font-bold text-sm">Nueva lección</div>
                    </div>
                </div>
                <div class="flex mt-1 items-center">
                    <label class="w-48" for="">Nombre de la lección: </label>
                    <input wire:model="name"
                        class="w-full bg-white focus:outline-none text-sm text-gray-800 font-bold border rounded-sm"
                        placeholder="Ingrese el nombre de la lección" type="text">
                </div>

                @error('name')
                    <span class="text-xs text-red-500">Favor de ingresar el titulo de la lección</span>
                @enderror

                <div class="flex items-center mt-1">
                    <label class="w-48 Lección:">Plataforma:</label>
                    <div class="w-full  ">
                        <select wire:model="platform_id"
                            class="block w-full bg-grey-lighter text-sm text-gray-800 font-bold border border-grey-lighter rounded-sm   md:w-full ">
                            @foreach ($platforms as $platform)
                                <option class="text-sm font-bold" value="{{ $platform->id }}">
                                    {{ $platform->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex mt-1 items-center">
                    <label class="w-48 Lección:">URL: </label>
                    <input wire:model="url"
                        class="w-full bg-white focus:outline-none text-sm text-blue-400 font-bold border rounded-sm"
                        placeholder="Ingrese la URL del video" type="text">
                </div>

                @error('url')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
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

</div>
