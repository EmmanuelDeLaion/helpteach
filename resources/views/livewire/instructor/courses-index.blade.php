<div class="container">

    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-semibold leading-tight mt-24">Cursos creados</h2>
        <button onclick="location.href='{{ route('instructor.courses.create') }}'"
            class="mt-24 bg-purple-500 text-white rounded-full py-2 px-2 focus:outline-none text-sm hover:bg-purple-700">
            <i class="fas fa-plus"></i>
            Crear un nuevo curso
        </button>
    </div>

    <x-table-responsive>

        <div class="block relative my-2">
            <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                    <path
                        d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                    </path>
                </svg>
            </span>
            <input wire:keydown="clear_page" wire:model="search" placeholder="Escriba el titulo de un curso"
                class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-purple-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:text-gray-500 focus:outline-none" />
        </div>

        @if ($courses->count())
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-purple-200 bg-purple-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Titulo del curso
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-purple-200 bg-purple-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Matriculados
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-purple-200 bg-purple-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Calificación
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-purple-200 bg-purple-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Status
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-purple-200 bg-purple-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Opciones
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($courses as $course)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-full h-full rounded-full"
                                            src="{{ Storage::url($course->image->url) }}"
                                            alt="Portada del curso:  {{ $course->title }}" />
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-600 bold whitespace-no-wrap">
                                            {{ $course->title }}
                                        </p>

                                        <p class="text-gray-400 whitespace-no-wrap">
                                            {{ $course->category->name }}
                                        </p>
                                    </div>

                                </div>

                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-500 whitespace-no-wrap">
                                    <span class="bold text-purple-500"> {{ $course->students->count() }} </span>
                                    Alumnos
                                </p>
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center justify-center">
                                    <div class="mr-2">
                                        <p class="text-gray-500 whitespace-no-wrap">
                                            <span class="bold text-gray-500"> {{ $course->rating }} </span>
                                        </p>
                                    </div>
                                    <div>
                                        <ul class="rating flex text-sm">
                                            <li> <i
                                                    class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray' }}-400 "></i>
                                            </li>
                                            <li> <i
                                                    class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray' }}-400 "></i>
                                            </li>
                                            <li> <i
                                                    class="fas fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'gray' }}-400 "></i>
                                            </li>
                                            <li> <i
                                                    class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray' }}-400 "></i>
                                            </li>
                                            <li> <i
                                                    class="fas fa-star text-{{ $course->rating >= 5 ? 'yellow' : 'gray' }}-400 "></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500">Valoración del curso</p>
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">


                                @switch($course->status)
                                    @case(1)
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                            <span class="relative">Borrador</span>
                                        </span>
                                    @break

                                    @case(2)
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-yellow-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-yellow-200 opacity-50 rounded-full"></span>
                                            <span class="relative">Revisión</span>
                                        </span>
                                    @break

                                    @case(3)
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative">Publicado</span>
                                        </span>
                                    @break

                                    @default

                                @endswitch

                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <button onclick="location.href='{{ route('instructor.courses.edit', $course) }}'"
                                    class="btn-primario">Editar</button>
                            </td>


                        </tr>

                    @endforeach

                </tbody>
            </table>

        @else

            <p class="px-6 py-4">El curso escrito no existe 🤔</p>
        @endif



        <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
            {{ $courses->links() }}
        </div>


    </x-table-responsive>



</div>
