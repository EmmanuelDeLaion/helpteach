<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body class="body">

    <x-app-layout>

        <section class="portada-home seccion">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
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
                        <p class="typing p-typing mt-2"></p>
                    </div>
                </div>
                <img class="ilustracion-h  " src="{{ asset('/images/home/ilustracion-home.png') }}" alt="ilustacion">

            </div>
        </section>


        <section class="mt-24">
            <h1 class="text-center mb-20  h1-titulo-enseñar">Contenido</h1>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-3 gap-6">
                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover"
                            src="{{ asset('/images/home/contenido-facil-usar.jpg') }}" alt="">
                    </figure>
                    <header>
                        <h1 class="text-center">Ayuda a Enseñar</h1>
                    </header>
                    <p class="text-sm text-center text-gray-500">Regístrate y crea cursos para las nuevas generaciones
                    </p>
                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover"
                            src="{{ asset('/images/home/contenido-acceso-gratis.jpg') }}" alt="">
                    </figure>
                    <header>
                        <h1 class="text-center ">Acceso Gratis</h1>
                    </header>
                    <p class="text-sm text-center text-gray-500">Regístrate e inicia sesión para poder tener acceso a
                        los cursos disponibles</p>
                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover"
                            src="{{ asset('/images/home/contenido-instructores.jpg') }}" alt="">
                    </figure>
                    <header>
                        <h1 class="text-center">Alumnos Instructores</h1>
                    </header>
                    <p class="text-sm text-center text-gray-500">Cursos creados por alumnos para alumnoss</p>
                </article>
            </div>

            <div class="flex justify-center">
                <button onclick="location.href='{{ route('about.index') }}'" type="submit"
                    class="btn-principal-outline mb-24  text-center">
                    ¿Quienes somos?
                </button>
            </div>

        </section>


        <section class="seccion seccion-enseñar">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">

                <div class="titulos-enseñar">
                    <h1 class="h1-titulo-enseñar">Ayudar a <br> enseñar</h1>
                    <p class="p-subtitulo-home">Regístrate y crea cursos <br> para las nuevas generaciones</p>
                    <button onclick="location.href = '#' " class="btn-principal-outline">Regístrate ahora</button>
                </div>
                <img class="ilustracion-manos-enseñar  " src="{{ asset('/images/home/ilustracion-manos.png') }}"
                    alt="">
            </div>
        </section>


        <section class="">
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
                    <article class="card-cursos mb-12">
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

                            <button onclick="location.href='{{ route('course.show', $course) }}'" type="submit"
                                class="w-11/12 btn-ver-curso mb-12 text-center">
                                Más información
                            </button>
                        </div>
                    </article>

                @endforeach



            </div>
        </section>



        <section class="seccion portada-home">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="titulos-camino-enseñanza w-full md:w-3/4 lg:w-1/2">
                    <h1 class="h1-titulo-enseñar">Rumbo al <br> aprendizaje</h1>
                    <p class="p-subtitulo-home"> Motivar a los alumnos que sigan el camino de la enseñanza sin que
                        existan decaídas principalmente a la hora de entender los temas y no hacer complicado el buscar
                        información en sitios donde cobran una cantidad excesiva </p>
                    <button class="btn-principal-outline">Ver más</button>
                </div>
                <img class="ilustracion-camino" src="{{ asset('/images/home/ilustracion-camino-enseñanza.png') }}"
                    alt="">
                <img class="ilustracion-planeta" src="{{ asset('/images/home/ilustracion-planeta.png') }}" alt="">
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
                    <p class="text-sm text-center text-gray-500">Puedes buscar más cursos en el apartado de todos los
                        cursos</p>
                    <button onclick="location.href='{{ route('courses.index') }}'" type="submit"
                        class="btn-principal-outline-blanco   ">
                        Ver cursos
                    </button>
                </div>
            </div>
        </section>



        <div class="bottom">
            <center class="center">
                <span class="credit">Created By <a target="_blanck"
                        href="http://emmanueldl.tecdevsmx.com/#/home">EmmanuelDL</a> | </span>
                <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
            </center>
        </div>








    </x-app-layout>


    <script type="text/javascript" src="{{ asset('js/funciones-home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/funcion-scroll.js') }}"></script>

</body>

</html>
