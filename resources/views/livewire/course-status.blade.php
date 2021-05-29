<div>

    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <section class="portada-cursos-status">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class=" text-home w-full md:w-3/4 lg:w-1/2">
                <p class="p-subtitulo-home text-lg "> {{ $course->title }}</p>
            </div>
        </div>
    </section>


    <div class="container grid grid-cols-3 gap-8  	">
        <div class="col-span-2 mt-6">
            
            <div class="w-full">
                {!! $current->frame !!}
            </div>

            <p class="mt-6 date-lesson-course">{{ $current->created_at }}</p>
            <h3 class="title-lesson-course">{{ $current->name }} </h3>


            <p>inidice: {{ $index }} </p>
            
            <p>previous: 
            @if($previous)
            {{ $previous->id }}
            @endif
            </p>

            <p>next:  
                @if($next)
                {{ $next->id }}
                @endif
            </p>
        </div>
        <div class="col-span-1 mt-6">
            <div
                class="container flex flex-col relative items-center w-full rounded-lg bg-white shadow-lg pb-5 text-gray-800 mb-10">
                <img class="rounded-full mt-6 w-20" src="{{ $course->teacher->profile_photo_url }}" alt="">
                <p class="span-primario text-sm font-bold"> <i class="fas fa-chalkboard-teacher"></i> Instructor
                    del curso</p>
                <h4 class="text-gray-700 text-sm"> {{ $course->teacher->name }} </h4>
                <a href="" class="text-sm span-primario"> {{ '@' . Str::slug($course->teacher->name, '') }}
                </a>

                <br>

                <ul>
                    @foreach ($course->sections as $section)
                        <li>
                            <a class="font-bold">{{ $section->name }}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li>
                                        <a class="cursor-pointer"
                                            wire:click="changeLesson({{ $lesson }})">{{ $lesson->id }}
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




    @livewire('footer')


</div>
