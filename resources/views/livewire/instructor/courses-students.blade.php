<div>
  

    <h1 class="text-2xl font-bold text-gray-800 mt-2">Estudiantes del curso</h1>
    <hr class="mt-2 mb-6">


    <x-table-responsive>

        <div class="block relative my-2">
            <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                    <path
                        d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                    </path>
                </svg>
            </span>
            <input wire:model="search" placeholder="Escriba el titulo del estudiante"
                class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-purple-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:text-gray-500 focus:outline-none" />
        </div>

        @if ($students->count())
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-purple-200 bg-purple-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nombre:
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-purple-200 bg-purple-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Correo:
                        </th>

                        <th
                            class="px-5 py-3 border-b-2 border-purple-200 bg-purple-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Opciones
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($students as $student)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-full h-full rounded-full"
                                            src="{{ $student->profile_photo_url }}" alt="{{ $student->name }}" />
                                    </div>

                                    <div class="ml-3">
                                        <p class="text-gray-600 bold whitespace-no-wrap">
                                            {{ $student->name }}
                                        </p>
                                    </div>
                                </div>
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-500 whitespace-no-wrap">
                                    <span class="bold text-purple-500"> {{ $student->email }} </span>
                                </p>
                            </td>  

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <button class="btn-primario">Ver</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="px-6 py-4">El curso escrito no existe 🤔</p>
        @endif

        <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
            {{ $students->links() }}
        </div>

    </x-table-responsive>


</div>
