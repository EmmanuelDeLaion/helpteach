<div>

    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <section class="portada-cursos-status">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class=" text-home w-full md:w-3/4 lg:w-1/2">
             </div>
        </div>
    </section>


    <div class="container grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3  gap-8">
        <div class="col-span-1 xs:col-span sm:col-span-1 md:col-span-2 lg:col-span-2 mt-2">
            <div class="embed-responsive">
                {!! $current->frame !!}
            </div>
            <p class="mt-2 date-lesson-course">{{ $current->created_at }}</p>

            <h3 class="title-lesson-course">{{ $current->name }} </h3>

            @if ($current->description)
                <div class="text-gray-600">
                    {{ $current->description->name }}
                </div>
            @endif

            <div class="flex items-center mt-4 cursor-pointer">
                <i class="fas fa-toggle-off text-2xl text-gray-600"></i>
                <p class="text-sm">¿Terminaste esta lección? marcala como terminada</p>
            </div>

            <div class="flex">
                @if ($this->previous)
                    <button wire:click="changeLesson({{ $this->previous }})" class="btn-primario-outline"><i class="fas fa-chevron-left"></i> Anterior</button>
                @endif

                @if($this->next)
                <button wire:click="changeLesson({{ $this->next }})" class="ml-auto btn-primario-outline">Siguiente <i class="fas fa-chevron-right"></i> </button>
                @endif

            </div>

            <p>inidice: {{ $this->index }} </p>
            <p>previous:
                @if ($this->previous)
                    {{ $this->previous->id }}
                @endif
            </p>
            <p>next:
                @if ($this->next)
                    {{ $this->next->id }}
                @endif
            </p>
        </div>
        <div class="col-span-1 xs:col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1 mt-2">
            <div
                class="container flex flex-col relative items-center w-full rounded-lg bg-white shadow-lg pb-5 text-gray-800 mb-10">
                <img class="rounded-full mt-6 w-20" src="{{ $course->teacher->profile_photo_url }}" alt="">
                <p class="span-primario text-sm font-bold"> <i class="fas fa-chalkboard-teacher"></i> Instructor
                    del curso</p>
                <h4 class="text-gray-700 text-sm"> {{ $course->teacher->name }} </h4>
                <a href="" class="text-sm span-primario"> {{ '@' . Str::slug($course->teacher->name, '') }}
                </a>
                <br>

                <div class="px-5">
                    <ul>
                        @foreach ($course->sections as $section)
                            <li>
                                <a class="font-bold">{{ $section->name }}</a>
                                <ul>
                                    @foreach ($section->lessons as $lesson)
                                        <li>
                                            <a class="cursor-pointer"
                                                wire:click="changeLesson({{ $lesson }})">{{ $lesson->name }}
                                                {{-- si el valor booleano es true imprime como completado si es falso no se imprime nada --}}
                                                @if ($lesson->completed)
                                                    (Completado)
                                                @endif
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>


            </div>
        </div>
    </div>




    @livewire('footer')


</div>
