<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>

    <title>HelpTeach</title>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

</head>

<div class="loading">
    <img class="logo-loader" src="{{ asset('/images/logo.png') }}" alt="">
</div>

<body class="body">

    <x-app-layout>
        <section class="portada-show-course">
            <div class="w-full container flex  md:hidden lg:hidden xl:hidden">
                @if ($course->image)
                    <img class="img-show-course-top" src="{{ Storage::url($course->image->url) }}" alt="">
                @else
                    <img class="img-show-course-top" src="{{ asset('images/logo.png') }}"
                        alt="Imagen de logo por defecto">
                @endif
            </div>
            <div
                class="container grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1 mt-2 ">
                <div class="container py-6 sm:py-6 md:py-24 lg:py-24 titulos-show-courses">
                    <h1 class="title-section"> {{ $course->title }} </h1>
                    <p class=" mt-6 font-bold"> {{ $course->subtitle }} </p>
                    <p class="p text-gray-500"> {!! $course->description !!} </p>
                    <ul class="mt-6">
                        <li>
                            <p class="textos"> <span class="span-primario"> <i class="fas fa-sort-numeric-up-alt"></i>
                                </span> Nivel: <span class="span-primario"> {{ $course->level->name }}</span> </p>
                        </li>

                        <li>
                            <p class="textos"> <span class="span-primario"><i class="fas fa-list-ol"></i>
                                </span>Categoria: <span class="span-primario">
                                    @isset($course->category->name)
                                        {{ $course->category->name }}
                                    @endisset
                                </span>
                            </p>
                        </li>
                        <li>
                            <p class="textos"> <span class="span-primario"> <i class="fas fa-users"></i></span>
                                Estudiantes: <span class="span-primario">
                                    {{ $course->students_count }} </span> </p>
                        </li>
                        <li>
                            <p class="textos"> <span class="span-primario"> <i class="far fa-calendar-alt"></i> </span>
                                Fecha de lanzamiento: <span class="span-primario">
                                    {{ $course->created_at }} </span> </p>
                        </li>
                    </ul>

                    <div class="flex">
                        {{-- si el usuario no esta registrado en el curso le aparece el boton para poder registrarse al curso --}}
                        <form action="{{ route('admin.courses.approved', $course) }}" method="post">
                            @csrf
                            <button type="submit" class="btn-primario">Aprobar curso</button>
                        </form>

                        <button onclick="location.href='{{ route('admin.courses.observation', $course) }}'"
                            class="ml-2 btn-primario-outline">Observar curso</button>

                        <button onclick="location.href='#info-curso'" class="ml-2 btn-primario-outline">Ver
                            temario
                        </button>
                    </div>

                </div>
                {{-- columna de la imagen --}}
                <div class="w-full hidden  md:flex lg:flex xl:flex">
                    @if ($course->image)
                        <img class="img-show-course" src="{{ Storage::url($course->image->url) }}" alt="">
                    @else
                        <img class="img-show-course" src="{{ asset('/imageS/logo.png') }}" alt="">

                    @endif
                </div>
            </div>

            <div class="container">
                {{-- no aprovado --}}
                @if (session('info'))
                    <div
                        class="alert flex flex-row items-center bg-red-200 p-5 rounded border-b-2 border-red-300 alerta-info">
                        <div
                            class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                            <span class="text-red-500">
                                <i class="fas fa-times"></i>
                            </span>
                        </div>
                        <div class="alert-content ml-4">
                            <div class="alert-title font-semibold text-lg text-red-800">
                                Falta información del curso
                            </div>
                            <div class="alert-description text-sm text-red-600">
                                {{ session('info') }}
                            </div>
                        </div>
                    </div>
                @else
                @endif

            </div>

        </section>



        <div>
            {{-- temario /info del curso --}}
            <div class="container grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 xs:grid-cols-1 gap-3  ">

                <div class="col-span-2">
                    {{-- contenedor metas del curso --}}
                    <div
                        class="border-l-4 border-purple-500 w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-5 text-gray-800">
                        <div class="w-full mb-10">
                            <h3 class="text-lg font-bold text-gray-700 mt-2">Lo que aprenderás en este curso</h3>
                            <ul
                                class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2  gap-x-6 gap-y-2 mt-2">

                                @forelse ($course->goals as $goal)
                                    <li class="text-sm text-gray-500"> <span class="span-primario">
                                            <i class="fas fa-check-circle"></i> </span> {{ $goal->name }}
                                    </li>
                                @empty
                                    <li class="text-sm text-gray-500">Este curso no tiene asignado ninguan meta
                                    </li>
                                @endforelse



                            </ul>
                        </div>
                    </div>


                    <section>
                        <h3 class="text-2xl font-bold text-gray-700 mt-10">Descripción del curso</h3>
                        @if ($course->description)
                            <p class="p text-gray-500 text-sm">{!! $course->description !!}</p>
                        @else
                            <p class="p text-gray-500 text-sm">Este curso no tiene una descripción</p>
                        @endif

                    </section>

                    <section>
                        <h3 class="text-2xl font-bold text-gray-700 mt-10">Requisitos</h3>
                        <ul>
                            @forelse ($course->requirements as $requirement)
                                <li class="text-sm text-gray-500">
                                    <span class="span-primario">
                                        <i class="fas fa-clipboard-check"></i>
                                    </span>
                                    {{ $requirement->name }}
                                </li>
                            @empty
                                <li class="text-sm text-gray-500">
                                    Este curso no tiene ningún requerimiento
                                </li>
                            @endforelse
                        </ul>
                    </section>

                    {{-- temario del curso --}}
                    <section id="info-curso">
                        <h3 class="text-2xl font-bold text-gray-700 mt-10">Temario del curso</h3>

                        @forelse ($course->sections as $section)
                            <section class="shadow bg-white mt-2 mb-2" @if ($loop->first) x-data="{ open: true }"
@else x-data="{ open: false }" @endif>

                                <article class="border-b">
                                    <div class="border-l-2 border-transparent">
                                        <header
                                            class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                                            <span class="text-grey-500 text-md">
                                                {{ $section->name }}
                                            </span>
                                            <div x-on:click="open = !open"
                                                class="rounded-full border border-grey w-7 h-7 flex items-center justify-center">
                                                <!-- icon by feathericons.com -->
                                                <svg aria-hidden="true" class="" data-reactid="266" fill="none"
                                                    height="24" stroke="#606F7B" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24"
                                                    width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <polyline points="6 9 12 15 18 9">
                                                    </polyline>
                                                </svg>
                                            </div>
                                        </header>
                                    </div>
                                </article>

                                <article class="border-b" x-show="open">
                                    <div class="border-l-4 border-purple-500 rounded-md">
                                        <header
                                            class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                                            <span class="text-indigo text-md">
                                                Temas
                                            </span>

                                        </header>
                                        <div>
                                            <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                                <ul class="pl-4">

                                                    @forelse ($section->lessons as $lesson)
                                                        <li class="text-sm text-gray-500 pb-2">
                                                            <span class="span-primario"> <i
                                                                    class="fas fa-play-circle"></i>
                                                            </span> {{ $lesson->name }}
                                                        </li>
                                                    @empty
                                                        <p class="text-sm text-gray-500">
                                                            Este curso no tiene ninguna lección
                                                        </p>
                                                    @endforelse

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        @empty
                            <p class="text-sm text-gray-500">
                                Este curso no tiene ninguna sección
                            </p>
                        @endforelse
                    </section>
                </div>



                <div class="col-span-1">
                    <div
                        class="border-l-4 border-purple-500 flex flex-col relative items-center w-full rounded-lg bg-white shadow-lg pb-5 text-gray-800 mb-10">
                        <img class="rounded-full mt-6 w-20" src="{{ $course->teacher->profile_photo_url }}" alt="">
                        <p class="span-primario text-sm font-bold"> <i class="fas fa-chalkboard-teacher"></i> Instructor
                            del curso</p>
                        <h4 class="text-gray-700 text-sm"> {{ $course->teacher->name }} </h4>
                        <a href="" class="text-sm span-primario"> {{ '@' . Str::slug($course->teacher->name, '') }}
                        </a>
                        <button class="btn-primario-outline">Ver perfil</button>
                        <div class="py-4 flex justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                            <span class="text-center px-2">
                                <span class="font-bold text-gray-700">56</span>
                                <span class="text-gray-600"> Cursos</span>
                            </span>

                            <span class="text-center px-2">
                                <span class="font-bold text-gray-700">112</span>
                                <span class="text-gray-600">Seguidores</span>
                            </span>

                            <span class="text-center px-2">
                                <span class="font-bold text-gray-700">27</span>
                                <span class="text-gray-600">repos</span>
                            </span>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        </div>

        @livewire('footer')

    </x-app-layout>

    <script src="{{ asset('js/instructor/courses/alerta.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/obtener-link.js') }}"></script>



</body>

</html>
