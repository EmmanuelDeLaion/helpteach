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

<body class="body">


    <div class="loading">
        <img class="logo-loader" src="{{ asset('/images/logo.png') }}" alt="">
    </div>


    <x-app-layout>

        <section class="portada-show-course">
            <div
                class="mx-auto grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1 px-4 mt-2 ">
                <div class=" mx-auto px-4 sm:px-6 lg:px-8 py-24 titulos-show-courses">
                    <h1 class="titulo-titulo-course"> {{ $course->title }} </h1>
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
                    <button class="btn-primario">Inscribirte al curso</button>
                    <button onclick="location.href='#info-curso'" class="btn-primario-outline">Ver temario</button>
                </div>
                <div class="w-full">
                    <img class="img-show-course" src="{{ Storage::url($course->image->url) }}" alt="">
                </div>
            </div>
        </section>


        <div style="background-color: var(--color-blanco-secundario); padding-top:20px; padding-bottom:20px;">


            {{-- temario /info del curso --}}
            <div id="info-curso" class="container grid grid-cols-3  gap-4">
                <div class="col-span-2">

                    {{-- contenedor metas del curso --}}
                    <div class="border-l-4 border-blue-400 w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-5 text-gray-800">
                        <div class="w-full mb-10">
                            <h3 class="text-lg font-bold text-gray-700 mt-2">Acerca de este curso</h3>
                            <ul class="grid grid-cols-2 gap-x-6 gap-y-2 mt-2">
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

                            <section class="shadow bg-white mt-2 mb-2">
                                <article class="border-b">
                                    <div class="border-l-2 border-transparent">
                                        <header
                                            class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                                            <span class="text-grey-500 text-xl">
                                                {{ $section->name }}
                                            </span>
                                            <div
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

                                <article class="border-b">
                                    <div class="border-l-4 border-blue-400 rounded-md">
                                        <header
                                            class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                                            <span class="text-indigo text-md">
                                                Temas
                                            </span>
                                            <div
                                                class="rounded-full border border border-indigo w-7 h-7 flex items-center justify-center bg-indigo">
                                                <!-- icon by feathericons.com -->
                                                <svg aria-hidden="true" data-reactid="281" fill="none" height="24"
                                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" viewbox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polyline points="18 15 12 9 6 15">
                                                    </polyline>
                                                </svg>
                                            </div>
                                        </header>
                                        <div>
                                            <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                                <ul class="pl-4">

                                                    @foreach ($section->lessons as $lesson)
                                                        <li class="text-sm text-gray-700 pb-2">

                                                            <span class="span-primario"> <i
                                                                    class="fas fa-angle-right"></i>
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
                        class="border-l-4 border-blue-400 flex flex-col relative items-center w-full mx-auto rounded-lg bg-white shadow-lg px-5 pb-10 text-gray-800 mb-10  ">
                        <img class="rounded-full w-20"
                            src="https://scontent.frex1-1.fna.fbcdn.net/v/t1.6435-9/36627150_1027414267428172_7736275383397384192_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeHLuCwTVUl9H2FWF_U0mo1jUZxsY2u4sI9RnGxja7iwj5aCv90Q9aOgIdZLWSj5atQiTpHXbaMMmaVhqwv7cDzD&_nc_ohc=crarL7eG8GUAX_TLEt2&_nc_ht=scontent.frex1-1.fna&oh=e5d7fa623f95883213f3f853920e5a7f&oe=60C06431"
                            alt="">
                        <p class="span-primario text-sm font-bold">Instructor del curso</p>
                        <h4 class="text-gray-700 text-sm">Jesus Emmanuel De León Lerma</h4>
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

                    <h3 class="text-2xl font-bold text-gray-700 mt-10">Otros cursos</h3>


                    {{-- apartado otros cursos --}}
                    <div class=" w-full bg-white  p-5 rounded-md shadow-lg">
                        <div id="header" class="flex">
                            <img alt="mountain" class="w-24  object-cover	 rounded-md border-gray-300"
                                src="https://nerade.com/media/pages/blog/programacion-web-a-medida/2022067010-1600522743/servicios-de-programacion-web-a-medida.jpg" />
                            <div id="body" class="flex flex-col ml-5">
                                <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet</h4>
                                <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud
                                    exercitati </p>
                                <div class="flex mt-5">
                                    <button class="btn-primario">Ir al curso</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- apartado otros cursos --}}
                    <div class=" w-full bg-white  p-5 rounded-md shadow-lg mt-2">
                        <div id="header" class="flex">
                            <img alt="mountain" class="w-24  object-cover	 rounded-md border-gray-300"
                                src="https://www.mejorconweb.com/images/programacion-web-barcelona.jpg" />
                            <div id="body" class="flex flex-col ml-5">
                                <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet</h4>
                                <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud
                                    exercitati </p>
                                <div class="flex mt-5">
                                    <button class="btn-primario">Ir al curso</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        </div>

        @livewire('footer')



    </x-app-layout>


    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>

</body>

</html>
