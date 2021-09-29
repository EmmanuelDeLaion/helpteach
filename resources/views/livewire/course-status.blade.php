<div>

    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <section class="portada-cursos-status">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class=" text-home w-full md:w-3/4 lg:w-1/2">
            </div>
        </div>
    </section>

    <div class="container grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3  gap-8 ">
        <div class="col-span-1 xs:col-span sm:col-span-1 md:col-span-2 lg:col-span-2 mt-2">
            <div class="embed-responsive">
                @isset($current->frame)
                    {!! $current->frame !!}
                @endisset

            </div>
            <p class="mt-2 date-lesson-course">
                @isset($current->created_at)
                    {{ $current->created_at }}
                @endisset

            </p>

            <h3 class="title-lesson-course">
                @isset($current->name)
                    {{ $current->name }}
                @endisset

            </h3>

            @isset($current->description)
                @if ($current->description)
                    <div class="text-gray-600">
                        @isset($current->description->name)
                            {{ $current->description->name }}
                        @endisset
                    </div>
                @endif
            @endisset




            <div class="flex items-center mt-4 cursor-pointer" wire:click="completed">

                @isset($current->completed)
                    @if ($current->completed)
                        <i class="fas fa-check-square text-purple-500 text-3xl"></i>
                    @else
                        <i class="far fa-square text-purple-500 text-3xl"></i>

                    @endif
                @endisset

                <p class="text-sm ml-2 hover:text-purple-500">Marcar como terminada</p>

            </div>

            <div class="flex mt-2">
                @if ($this->previous)
                    <button wire:click="changeLesson({{ $this->previous }})" class="btn-primario-outline my-2"><i
                            class="fas fa-chevron-left"></i> Anterior</button>
                @endif

                @if ($this->next)
                    <button wire:click="changeLesson({{ $this->next }})"
                        class="ml-auto btn-primario-outline my-2">Siguiente <i class="fas fa-chevron-right"></i>
                    </button>
                @endif

            </div>
        </div>

        <div class="col-span-1 xs:col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1 mt-2 mb-6">
            <div
                class="container flex flex-col relative items-center w-full rounded-lg bg-white shadow-lg pb-5 text-gray-800 mb-10">
                <img class="rounded-full mt-6 w-20" src="{{ $course->teacher->profile_photo_url }}" alt="">
                <p class="span-primario text-sm font-bold"> <i class="fas fa-chalkboard-teacher"></i> Instructor
                    del curso</p>
                <h4 class="text-gray-700 text-sm"> {{ $course->teacher->name }} </h4>
                <a href="" class="text-sm span-primario"> {{ '@' . Str::slug($course->teacher->name, '') }}
                </a>
                <br>

                <p class="text-center bold text-purple-500">{{ $this->advance }}% completado</p>
                <div class="progress bg-gray-300">
                    <div style="width: {{ $this->advance }}%" class="porcentaje"></div>
                </div>



                <div class="px-5">
                    <ul>
                        @foreach ($course->sections as $section)
                            <li>
                                <a class="font-bold inline-block mb-2 mt-2">{{ $section->name }}</a>
                                <ul>
                                    @foreach ($section->lessons as $lesson)
                                        <li class="flex mb-1">
                                            <div>
                                                @if ($lesson->completed)
                                                    @if ($current->id == $lesson->id)
                                                        <span
                                                            class="relative inline-block w-5 h-5 border-2 border-purple-500 rounded-full mr-2 mt-1">
                                                            <i class=" absolute fas fa-check text-purple-500"></i>
                                                        </span>
                                                    @else
                                                        <span
                                                            class="relative inline-block w-5 h-5 border-2 border-purple-500 bg-purple-500 rounded-full mr-2 mt-1">
                                                            <i class="absolute fas fa-check text-white"></i>
                                                        </span>
                                                    @endif
                                                @else
                                                    @if ($current->id == $lesson->id)
                                                        <span
                                                            class="inline-block w-5 h-5 border-2 border-purple-500 bg-gray-300 rounded-full mr-2 mt-1"></span>
                                                    @else
                                                        <span
                                                            class="inline-block w-5 h-5 bg-gray-300 rounded-full mr-2 mt-1"></span>
                                                    @endif

                                                @endif
                                            </div>

                                            @if ($current->id == $lesson->id)
                                                <a class="cursor-pointer text-sm text-purple-500 bold hover:text-purple-600"
                                                    wire:click="changeLesson({{ $lesson }})">{{ $lesson->name }}
                                                </a>
                                            @else
                                                <a class="cursor-pointer text-sm text-gray-500 hover:text-purple-500"
                                                    wire:click="changeLesson({{ $lesson }})">{{ $lesson->name }}
                                                    {{-- si el valor booleano es true imprime como completado si es falso no se imprime nada --}}
                                                </a>
                                            @endif


                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                        @endforeach
                    </ul>

                    <div>
                        <hr>
                        @if ($this->advance == 100)
                            <button wire:click="downloadDiploma" class="btn-primario">
                                <i class="fas fa-download"></i>
                            </button>
                            <h1 class="font-bold inline-block mb-2 mt-2">Descargar certificado</h1>
                        @endif
                    </div>

                </div>


            </div>
        </div>
    </div>




    @livewire('footer')



</div>
