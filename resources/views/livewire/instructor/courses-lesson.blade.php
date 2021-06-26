<div>
    @foreach ($section->lessons as $item)
        <div class="bg-purple-100 p-2 m-2 rounded-sm mt-1">
            <i class="fas fa-play-circle text-purple-500"></i> Lección: {{ $item->name }}
            <hr class="my-2">

            @if ($lesson->id == $item->id)
                <div>
                    <div class="flex mt-1 items-center">
                        <label class="w-48" for="">Nombre de la lección: </label>
                        <input wire:model="lesson.name"
                            class="w-full bg-white focus:outline-none text-sm text-gray-800 font-bold border rounded-sm"
                            placeholder="Ingrese el nombre de la lección" type="text">
                    </div>

                    @error('lesson.name')
                        <span class="text-xs text-red-500">Favor de ingresar el titulo de la lección</span>
                    @enderror

                    <div class="flex items-center mt-1">
                        <label class="w-48">Plataforma:</label>
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
                        <label class="w-48" for="">URL: </label>
                        <input wire:model="lesson.url"
                            class="w-full bg-white focus:outline-none text-sm text-blue-400 font-bold border rounded-sm"
                            placeholder="Ingrese la URL del video" type="text">
                    </div>

                    @error('lesson.url')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror

                    <div class="mt-4 flex justify-end">
                        <button wire:click="update" class="btn-primario ">Actualizar</button>
                        <button class="btn-primario-outline-red ml-1">Cancelar</button>
                    </div>

                </div>


            @else

                <div class="">
                    <p>Plataforma: {{ $item->platform->name }}</p>
                    <a href="{{ $item->url }}" target="_blanck">Enlace: <span class="text-blue-400">
                            {{ $item->url }}</span> </a>
                    <div class="flex">
                        <button wire:click="edit({{ $item }})" class="btn-primario ">Editar</button>
                        <button class="btn-primario-outline-red ml-1">Eliminar</button>
                    </div>
                </div>

            @endif

        </div>

    @endforeach
</div>
