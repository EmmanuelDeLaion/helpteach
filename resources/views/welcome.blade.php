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

    <x-app-layout>

        <section class="portada-home">
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
                {{-- <img class="ilustracion-h  " src="{{ asset('/images/home/ilustracion-home.png') }}" alt="ilustacion"> --}}

            </div>
        </section>


        <section class="seccion-conteiner">
            <h1 class="text-center mb-12 mt-24  h1-titulo-enseñar">Contenido</h1>

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

                <div class="card" id="card2">
                    <div class="card-header">
                        <div class="flex justify-center">
                            <img class="img-card-header" src="{{ asset('/images/home/ilustracion-libreta.png') }}" />
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
                            <img class="img-card-header" src="{{ asset('/images/home/ilustracion-home.png') }}" />
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
                                class="w-11/12 btn-ver-curso mb-6 text-center">
                                Más información
                            </button>
                        </div>
                    </article>

                @endforeach



            </div>
        </section>



        <section class="seccion portada-aprendizaje">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="titulos-camino-enseñanza w-full md:w-3/4 lg:w-1/2">
                    <h1 class="h1-titulo-enseñar">Rumbo al <br> aprendizaje</h1>
                    <p class="p-subtitulo-home"> Motivar a los alumnos que sigan el camino de la enseñanza sin que
                        existan decaídas principalmente a la hora de entender los temas y no hacer complicado el buscar
                        información en sitios donde cobran una cantidad excesiva </p>
                    <button class="btn-primario-outline">Ver más</button>
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
                    <p class="text-sm text-center text-white-500">Puedes buscar más cursos en el apartado de todos los
                        cursos</p>
                    <button onclick="location.href='{{ route('courses.index') }}'" type="submit"
                        class="btn-primario-outline-blanco   ">
                        Ver cursos
                    </button>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>HelpTeach</h4>
                        <ul>
                            <li><a href="{{ route('about.index') }}">¿Quienes Somos?</a></li>
                            <li><a href="">Políticas de privacidad</a></li>
                        </ul>
                        <svg onclick="location.href='#' " class="mt-6 logo-footer" xmlns="http://www.w3.org/2000/svg"
                            width="150" height="70" viewBox="0 0 66 28">
                            <defs>
                                <style>
                                    .a {
                                        fill: #fff;
                                        font-size: 12px;
                                        font-family: KGBlankSpaceSolid, KG Blank Space Solid;
                                    }

                                    .b {
                                        fill: #328af1;
                                    }

                                </style>
                            </defs>
                            <g transform="translate(-8795 -19363)"><text class="a" transform="translate(8824 19376)">
                                    <tspan x="0" y="0">Help</tspan>
                                    <tspan class="b">
                                        <tspan x="0" y="12">Teach</tspan>
                                    </tspan>
                                </text>
                                <path class="b"
                                    d="M6.8,67.714a.411.411,0,0,1,.7-.143.932.932,0,0,1,.1,1L7,69.705a.476.476,0,0,0,.023.467l.2.286a.2.2,0,0,0,.369-.025L9,68.027V64.714c0-.4.223-.714.5-.714s.5.319.5.714v4.875a1.387,1.387,0,0,1-.164.67l-1.627,3a1.631,1.631,0,0,0-.163.484C8.019,73.9,7.92,74,7.808,74H5.75c-.137,0-.25-.161-.25-.357v-2.5a3.733,3.733,0,0,1,.4-1.714ZM.5,64c.277,0,.5.319.5.714v3.313l1.4,2.406a.206.206,0,0,0,.369.025l.2-.286A.476.476,0,0,0,3,69.705l-.6-1.134a.932.932,0,0,1,.1-1,.411.411,0,0,1,.7.143l.9,1.714a3.733,3.733,0,0,1,.4,1.714v2.5c0,.2-.112.357-.25.357H2.192c-.111,0-.211-.1-.239-.259a1.631,1.631,0,0,0-.163-.484l-1.627-3A1.387,1.387,0,0,1,0,69.589V64.714C0,64.319.223,64,.5,64Z"
                                    transform="translate(8803.5 19315.219)" />
                                <path class="b"
                                    d="M3.2,2.6a.5.5,0,0,0-.8.6l.6.794a.25.25,0,0,1-.023.327l-.2.2A.248.248,0,0,1,2.4,4.5L1,2.819V.5a.5.5,0,1,0-1,0V3.913a.751.751,0,0,0,.164.469l1.627,2.1a.933.933,0,0,1,.163.339A.245.245,0,0,0,2.192,7H4.25a.251.251,0,0,0,.25-.25V5a2,2,0,0,0-.4-1.2L3.2,2.6ZM9.5,0A.5.5,0,0,0,9,.5V2.819L7.6,4.5a.251.251,0,0,1-.369.017l-.2-.2A.25.25,0,0,1,7,3.994L7.6,3.2a.5.5,0,1,0-.8-.6L5.9,3.8A2,2,0,0,0,5.5,5V6.75A.251.251,0,0,0,5.75,7H7.808a.246.246,0,0,0,.239-.181.933.933,0,0,1,.163-.339l1.627-2.1A.751.751,0,0,0,10,3.912V.5A.5.5,0,0,0,9.5,0Z"
                                    transform="translate(8802 19372.219) rotate(90)" />
                                <path class="b"
                                    d="M3.2,2.6a.5.5,0,0,0-.8.6l.6.794a.25.25,0,0,1-.023.327l-.2.2A.248.248,0,0,1,2.4,4.5L1,2.819V.5a.5.5,0,1,0-1,0V3.913a.751.751,0,0,0,.164.469l1.627,2.1a.933.933,0,0,1,.163.339A.245.245,0,0,0,2.192,7H4.25a.251.251,0,0,0,.25-.25V5a2,2,0,0,0-.4-1.2L3.2,2.6ZM9.5,0A.5.5,0,0,0,9,.5V2.819L7.6,4.5a.251.251,0,0,1-.369.017l-.2-.2A.25.25,0,0,1,7,3.994L7.6,3.2a.5.5,0,1,0-.8-.6L5.9,3.8A2,2,0,0,0,5.5,5V6.75A.251.251,0,0,0,5.75,7H7.808a.246.246,0,0,0,.239-.181.933.933,0,0,1,.163-.339l1.627-2.1A.751.751,0,0,0,10,3.912V.5A.5.5,0,0,0,9.5,0Z"
                                    transform="translate(8815 19382.219) rotate(-90)" />
                                <path class="b"
                                    d="M6.8,6.286a.411.411,0,0,0,.7.143.932.932,0,0,0,.1-1L7,4.295a.476.476,0,0,1,.023-.467l.2-.286a.2.2,0,0,1,.369.025L9,5.973V9.286c0,.4.223.714.5.714s.5-.319.5-.714V4.411a1.387,1.387,0,0,0-.164-.67l-1.627-3A1.631,1.631,0,0,1,8.047.259C8.019.1,7.92,0,7.808,0H5.75C5.613,0,5.5.161,5.5.357v2.5a3.733,3.733,0,0,0,.4,1.714l.9,1.714ZM.5,10c.277,0,.5-.319.5-.714V5.973L2.4,3.567a.206.206,0,0,1,.369-.025l.2.286A.476.476,0,0,1,3,4.295L2.4,5.429a.932.932,0,0,0,.1,1,.411.411,0,0,0,.7-.143l.9-1.714a3.733,3.733,0,0,0,.4-1.714V.357C4.5.161,4.388,0,4.25,0H2.192c-.111,0-.211.1-.239.259a1.631,1.631,0,0,1-.163.484l-1.627,3A1.387,1.387,0,0,0,0,4.411V9.286C0,9.681.223,10,.5,10Z"
                                    transform="translate(8803.5 19365.781)" />
                            </g>
                        </svg>
                    </div>
                    <div class="footer-col">
                        <h4>Ayuda</h4>
                        <ul>
                            <li><a href="">Preguntas Frecuentes</a></li>
                            <li><a href="">Opciones de pago</a></li>
                            <li><a href="">Ser instructor</a></li>
                            <li><a href="">Ser cursante</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Otros servicios</h4>
                        <ul>
                            <li><a href="">Sistemas Web Empresariales</a></li>
                            <li><a href="">Sitios Web </a></li>
                        </ul>
                        <button onclick="location.href='http://tecdevsmx.com/'" type="submit" class="btn-primario   ">
                            TecDevs
                        </button>
                    </div>
                    <div class="footer-col">
                        <h4>Contacto</h4>
                        <ul>
                            <li><a href="#">emmanueldl@tecdevsmx.com</a></li>
                        </ul>
                        <div class="social-links">
                            <a class="fb" target="_blanck"
                                href="https://web.facebook.com/jesusemmanuel.lerma/?_rdc=1&_rdr"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="tw" target="_blanck" href="https://twitter.com/ElMonoDl"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="ig" target="_blanck" href="https://www.instagram.com/emmanueldelaion/"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="li" target="_blanck"
                                href="https://www.linkedin.com/in/jesus-emmanuel-de-leon-lerma-0903071b7/"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>

                        <button onclick="location.href='{{ route('courses.index') }}'" type="submit"
                            class="btn-primario-outline-blanco   ">
                            Empieza Ahora
                        </button>

                    </div>
                </div>
            </div>
        </footer>



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
