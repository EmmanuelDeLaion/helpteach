<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>
    {{-- <link rel="shortcut icon" href="{{ asset('/images/logo.svg') }}"> --}}

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

        <section class="portada-home">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class=" text-home w-full md:w-3/4 lg:w-1/2">
                    <h1 class="h1-titulo-home">Cursa o crea un <span class="span"> curso</span> </h1>
                    <p class="p-subtitulo-home text-lg ">En <span class="span"> HelpTeach </span> podrás encontrar
                        cursos creados por alumnos totalmente gratuitos </p>
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input
                            class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                            type="search" name="search" placeholder="¿Que deseas aprender?">
                        <button type="submit" class="btn-buscar-home absolute right-0 top-0 mt-2 ">
                            buscar
                        </button>

                        <nav class="nav-busquedas">
                            <ul class="ul-busquedas">
                                <li class="li-busquedas"> <a class="a-busquedas" href="">Diseño web</a></li>
                                <li class="li-busquedas"> <a class="a-busquedas" href="">Programación</a></li>
                                <li class="li-busquedas"> <a class="a-busquedas" href="">Calculo</a></li>
                                <li class="li-busquedas"><a class="a-busquedas" href="">Ingles</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </section>



        <div class="seccion-numeros">
            <img class="puntos-derecha" src="{{ asset('/images/home/puntos.png') }}" alt="ilustracion puntos">
            <img class="puntos-izquierda" src="{{ asset('/images/home/puntos.png') }}" alt="ilustracion puntos">

            <div class="container-num">
                <h1 class="text-center mt-6 titulo-numeros"> Estudia y practica en <span class="span-numeros">
                        HelpTeach</span> </h1>

                <div
                    class="justify-center mx-auto grid grid-cols-1 lg:grid-cols-4 xl:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1 px-4 mt-2">
                    <div class="contador">
                        <h1 class="text-center titulos-numeros contador_cantidad" id="cont1" data-cantidad-total="105">
                            0</h1>
                        <p class="text-center descripcion-numeros">Alumnos inscritos</p>
                    </div>

                    <div class="contador">
                        <h1 class="text-center titulos-numeros contador_cantidad" id="cont2" data-cantidad-total="20">0
                        </h1>
                        <p class="text-center descripcion-numeros">Alumnos instructores</p>
                    </div>


                    <div class="contador">
                        <h1 class="text-center titulos-numeros contador_cantidad" id="cont3" data-cantidad-total="70">0
                        </h1>
                        <p class="text-center descripcion-numeros">Cursos disponibles</p>
                    </div>

                    <div class="flex justify-center items-center">
                        <button class="btn-primario-outline">Ver más </button>
                    </div>

                </div>

            </div>
        </div>



        <section class="seccion-conteiner">
            <h1 class="text-center mb-12   h1-titulo-enseñar">Contenido</h1>
            <div
                class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 xl:grid-cols-3 gap-6  ">
                <div class="card">
                    <div class="card-header">
                        <div class="flex justify-center">
                            <img class="img-card-header" src="{{ asset('/images/home/ilustracion-manos.png') }}" />
                        </div>
                        <h3 class="titulo-card mt-2">Ayuda a enseñar</h3>
                    </div>
                    <div class="card-body">
                        <p class="p-card">Regístrate y crea cursos para las nuevas generaciones</p>

                        <div class="flex justify-center">
                            <button class="btn-secundario w-11/12">Ver más</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="flex justify-center">
                            <img class="img-card-header" src="{{ asset('/images/home/ilustracion-manos.png') }}" />
                        </div>
                        <h3 class="titulo-card mt-2">Acceso gratis</h3>
                    </div>
                    <div class="card-body">
                        <p class="p-card">Regístrate e inicia sesión para poder tener acceso a los cursos disponibles
                        </p>

                        <div class="flex justify-center">
                            <button class="btn-primario w-11/12"
                                onclick="location.href='{{ route('register') }}'">Regístrate ahora</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="flex justify-center">
                            <img class="img-card-header" src="{{ asset('/images/home/ilustracion-manos.png') }}" />
                        </div>
                        <h3 class="titulo-card mt-2">Alumnos instructores</h3>
                    </div>
                    <div class="card-body">
                        <p class="p-card">Cursos creados por alumnos para alumnos</p>

                        <div class="flex justify-center">
                            <button class="btn-secundario w-11/12">Ver más</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section class=" mb-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="px-4 sm:px-6 w-full lg:w-1/2">
                    <h1 class="titulo-cursos-home">Obtén el conocimiento de los siguientes cursos</h1>
                    <p class="mt-2">Estos son los ultimos cursos que se han subido</p>
                </div>
            </div>

            <div
                class="grid gap-4 grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-2 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 gap-x-6 gap-y-8">

                @foreach ($courses as $course)

                    {{-- {{ Storage::url($course->image->url) }} --}}
                    <article class="card-cursos  mb-12">
                        <div class="card-info-hover">
                            <svg class="card-like" viewBox="0 0 24 24">
                                <path fill="#000000"
                                    d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                            </svg>
                        </div>
                        <div class="card-img"
                            style="background-image: url('{{ Storage::url($course->image->url) }}')">
                        </div>

                        <a class="card-link">
                            <div class="card-img-hover"
                                style="background-image: url('{{ Storage::url($course->image->url) }}')">
                            </div>
                        </a>
                        <div class="card-info">
                            <span class="card-category">Desarrollo web</span>
                            <h3 class="card-title"> {{ $course->title }} </h3>
                            <span class="card-by">De: <a href="#" class="card-author" title="author">
                                    {{ $course->teacher->name }} </a></span>

                            <div class="flex justify-between">
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

                                <p class="text-sm text-gray">
                                    <i class=" icon-students fas fa-chalkboard-teacher"></i>
                                    ({{ $course->students_count }})
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-center">

                            <button onclick="location.href='{{ route('courses.show', $course) }}'" type="submit"
                                class="w-11/12 btn-ver-curso mb-6 text-center">
                                Más información
                            </button>
                        </div>
                    </article>

                @endforeach

            </div>

            <div class="flex justify-center">
                <button onclick="location.href='{{ route('courses.index') }}'" class="btn-secundario"> Ver más
                    cursos</button>
            </div>
        </section>


        <section>
            <div class="seccion-alumnos-instructores">
                <div class="contenido-alumnos">
                    <h1 class="titulo-alumnos-instructores">Alumnos Instructores</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, qui?</p>
                    <button onclick="location.href='{{ route('about.index') }}'" class="btn-primario">Más
                        información</button>
                </div>
            </div>
        </section>



        <section class="seccion-empezar">
            <div class="contenido-empezar">
                <h1 class="titulo-empezar">Estás a un paso de empezar algo grande <br> ¿Empezamos? </h1>
                <button onclick="location.href='{{ route('courses.index') }}'" class="btn-primario">Empezar
                    ahora</button>
            </div>
        </section>




        <section class="contenedor-fondo-animado">
            {{-- <svg class="svg-index" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L60,90.7C120,85,240,75,360,80C480,85,600,107,720,122.7C840,139,960,149,1080,144C1200,139,1320,117,1380,106.7L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg> --}}

            <div class="animacion">
                <span class="uno"></span>
                <span class="dos"></span>
                <span class="tres"></span>
                <span class="cuatro"></span>

                <span class="uno"></span>
                <span class="dos"></span>
                <span class="tres"></span>
                <span class="cuatro"></span>

                <span class="uno"></span>
                <span class="dos"></span>
                <span class="tres"></span>
                <span class="cuatro"></span>
            </div>
            <div class="seccion-contenido">
                <div class="contenido">
                    <h1>¿No sabes cual curso ver?</h1>
                    <p class="text-sm text-center text-white-500">Puedes buscar más cursos en el apartado de todos los
                        cursos</p>
                    <button onclick="location.href='{{ route('courses.index') }}'" type="submit"
                        class="btn-primario-outline-blanco   ">
                        Ver cursos
                    </button>
                </div>
            </div>
        </section>


        @livewire('footer')
        
    </x-app-layout>


    <script type="text/javascript" src="{{ asset('js/funciones-home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/contadores-home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>


</body>

</html>
