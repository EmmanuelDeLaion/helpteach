<form class="pt-2 relative mx-auto text-gray-600 focus:outline-none" autocomplete="off">
    <input wire:model="search"
        class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
        type="search" name="search" placeholder="¿Que deseas aprender?">
    <button type="submit" class="btn-buscar-home absolute right-0 top-0 mt-2 ">
        buscar
    </button>

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
