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
            <div class="w-full container flex  md:hidden lg:hidden xl:hidden  ">
                <img class="img-show-course-top" src="{{ Storage::url($course->image->url) }}" alt="">
            </div>
            <div
                class="container grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1 mt-2 ">
                <div class="container py-6 sm:py-6 md:py-24 lg:py-24 titulos-show-courses">
                    <h1 class="title-section"> {{ $course->title }} </h1>
                    <p class="textos mt-6"> {{ $course->subtitle }} </p>
                    <p> {{ $course->description }} </p>
                    <ul class="mt-6">
                        <li>
                            <p class="textos"> <span class="span-primario"> <i class="fas fa-sort-numeric-up-alt"></i>
                                </span> Nivel: <span class="span-primario"> {{ $course->level->name }}</span> </p>
                        </li>
                        
                        <li>
                            <p class="textos"> <span class="span-primario"><i class="fas fa-list-ol"></i> </span>
                                Categoria: <span class="span-primario">
                                    {{ $course->category->name }} </span> </p>
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
                    <div class="flex justify-between mt-2">
                        <ul class="rating flex text-sm">
                            <li> <i class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray' }}-400 "></i>
                            </li>
                            <li> <i class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray' }}-400 "></i>
                            </li>
                            <li> <i class="fas fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'gray' }}-400 "></i>
                            </li>
                            <li> <i class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray' }}-400 "></i>
                            </li>
                            <li> <i class="fas fa-star text-{{ $course->rating >= 5 ? 'yellow' : 'gray' }}-400 "></i>
                            </li>
                        </ul>
                    </div>
                    <div class="flex">
                        @can('enrolled', $course)
                            {{-- si el usuario ya esta registrado le aparece este boton que dice continuar --}}
                            <button onclick="location.href='{{ route('courses.status', $course) }}'"
                                class="btn-primario">Continuar con el curso</button>
                        @else
                            {{-- si el usuario no esta registrado en el curso le aparece el boton para poder registrarse al curso --}}
                            <form action="{{ route('courses.enrolled', $course) }}" method="post">
                                @csrf
                                <button type="submit" class="btn-primario">Inscribirte al curso</button>
                            </form>
                        @endcan
                        <button onclick="location.href='#info-curso'" class="ml-2 btn-primario-outline">Ver
                            temario</button>
                    </div>
                    <p class="text-sm mt-6">Comparte: </p>
                    <div class="social-shared">
                        <a class="shared-fb" target="_blanck"
                            href="https://web.facebook.com/jesusemmanuel.lerma/?_rdc=1&_rdr"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="shared-tw" target="_blanck" href="https://twitter.com/ElMonoDl"><i
                                class="fab fa-twitter"></i></a>
                        <a class="shared-ig" target="_blanck" href="https://www.instagram.com/emmanueldelaion/"><i
                                class="fab fa-instagram"></i></a>
                        <a class="shared-li" target="_blanck"
                            href="https://www.linkedin.com/in/jesus-emmanuel-de-leon-lerma-0903071b7/"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="shared-copy" target="_blanck" href=""><i class="fas fa-copy"></i></a>
                    </div>
                </div>
                {{-- columna de la imagen --}}
                <div class="w-full hidden  md:flex lg:flex xl:flex  ">
                    <img class="img-show-course" src="{{ Storage::url($course->image->url) }}" alt="">
                </div>
            </div>
        </section>


        <div style="background-color: var(--color-blanco-secundario); padding-top: 10px; padding-bottom: 10px; ">
            {{-- temario /info del curso --}}
            <div id="info-curso"
                class="container grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 xs:grid-cols-1 gap-3  ">
                <div class="col-span-2">
                    {{-- contenedor metas del curso --}}
                    <div
                        class="border-l-4 border-purple-500 w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-5 text-gray-800">
                        <div class="w-full mb-10">
                            <h3 class="text-lg font-bold text-gray-700 mt-2">Acerca de este curso</h3>
                            <ul
                                class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2  gap-x-6 gap-y-2 mt-2">
                                @foreach ($course->goals as $goal)
                                    <li class="text-sm text-gray-700"> <span class="span-primario"> <i
                                                class="fas fa-check-circle"></i> </span> {{ $goal->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    {{-- temario del curso --}}
                    <section>
                        <h3 class="text-2xl font-bold text-gray-700 mt-10">Temario del curso</h3>
                        @foreach ($course->sections as $section)

                            <section class="shadow bg-white mt-2 mb-2" @if ($loop->first) x-data="{ open: true }"
@else
                            x-data="{ open: false }" @endif>

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
                                                    @foreach ($section->lessons as $lesson)
                                                        <li class="text-sm text-gray-700 pb-2">
                                                            <span class="span-primario"> <i
                                                                    class="fas fa-play-circle"></i>
                                                            </span> {{ $lesson->name }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section>

                        @endforeach
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
                        <button class="btn-secundario">Ver perfil</button>
                        <div class="py-4 flex justify-center items-center w-full divide-x divide-gray-400 divide-solid">
                            <span class="text-center px-2"><span class="font-bold text-gray-700">56</span><span
                                    class="text-gray-600"> Cursos</span></span><span class="text-center px-2"><span
                                    class="font-bold text-gray-700">112</span><span class="text-gray-600">
                                    Seguidores</span></span><span class="text-center px-2"><span
                                    class="font-bold text-gray-700">27</span><span class="text-gray-600">
                                    repos</span></span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-700 mt-10">Cursos recomendados</h3>
                    {{-- apartado otros cursos --}}
                    @foreach ($recomendados as $recomendado)
                        <div class="hover-recomendados w-full bg-white p-5 rounded-md shadow-lg mt-4 mb-4">
                            <div class="flex grid grid-cols-2">
                                <div class="col-span-1">
                                    <img onclick="location.href='{{ route('courses.show', $recomendado) }}'"
                                        alt="mountain"
                                        class="w-full object-cover rounded-md border-gray-300 cursor-pointer"
                                        src=" {{ Storage::url($recomendado->image->url) }} " />
                                </div>

                                <div class="col-span-1">
                                    <div class="flex flex-col
                                    ml-5">
                                        <a href="{{ route('courses.show', $recomendado) }}"
                                            class="text-sm font-semibold"> {{ $recomendado->title }} </a>
                                        {{-- <p class=" text-gray-500 text-sm">{{ $recomendado->category->name }}</p> --}}

                                        <div class="flex items-center">
                                            <img width="30" class="rounded-full"
                                                src="{{ $recomendado->teacher->profile_photo_url }}"
                                                alt="imagen de perfil del instructor">
                                            <p class="text-gray-800 text-xs ml-2"> <span
                                                    class="span-primario">{{ $recomendado->teacher->name }}
                                                </span> </p>
                                        </div>


                                        <div class="flex justify-between mt-2">
                                            <ul class="rating flex text-sm">
                                                <li> <i
                                                        class="fas fa-star text-{{ $recomendado->rating >= 1 ? 'yellow' : 'gray' }}-400 "></i>
                                                </li>
                                                <li> <i
                                                        class="fas fa-star text-{{ $recomendado->rating >= 2 ? 'yellow' : 'gray' }}-400 "></i>
                                                </li>
                                                <li> <i
                                                        class="fas fa-star text-{{ $recomendado->rating >= 3 ? 'yellow' : 'gray' }}-400 "></i>
                                                </li>
                                                <li> <i
                                                        class="fas fa-star text-{{ $recomendado->rating >= 4 ? 'yellow' : 'gray' }}-400 "></i>
                                                </li>
                                                <li> <i
                                                        class="fas fa-star text-{{ $recomendado->rating >= 5 ? 'yellow' : 'gray' }}-400 "></i>
                                                </li>
                                            </ul>

                                            <p class="text-sm text-gray">
                                                <i class=" icon-students fas fa-chalkboard-teacher"></i>
                                                ({{ $recomendado->students_count }})
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>


        </div>

        @livewire('footer')



    </x-app-layout>


    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>

</body>

</html>
