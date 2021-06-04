<form class="pt-2 relative mx-auto text-gray-600 focus:outline-none" autocomplete="off">

    <input wire:model="search" class="input" placeholder="¿Qué estas buscando?" type="text">
    <button type="submit" class="btn-primario"><i class="fas fa-search"></i> Buscar</button>

    @if ($search)
        <ul class="absolute left-0 w-full bg-white mt-1 rounded-md overflow-hidden">
            @forelse ($this->results as $result)
                <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                    <a href="{{ route('courses.show', $result) }}">{{ $result->title }}</a>
                </li>

            @empty
                <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                    No hay ninguna coincidencia &#128557;&#128076;
                </li>
            @endforelse
        </ul>
    @endif

</form>
