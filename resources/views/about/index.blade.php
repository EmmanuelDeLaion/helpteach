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

        <section class="portada-about">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class=" text-home w-full md:w-3/4 lg:w-1/2">
                    <h1 class="h1-titulo-home">¿Quienes somos? </h1>
                    <p class="p-subtitulo-home text-lg ">En <span class="span"> HelpTeach </span> podrás encontrar
                        cursos creados por alumnos totalmente gratuitos </p>

                </div>
            </div>
        </section>

        <section class="container mt-6">

            <div class="flex justify-center">
                <img width="200" src="{{ asset('/images/logo.png') }}" alt="">
            </div>


            <div class="flex justify-center mt-6">
                <h1 class="w-full md:w-3/4 lg:w-3/4 text-center titulo-cursos-home">Plataforma de cursos en linea hechos
                    por <span class="span-primario">alumnos</span>  para
                    <span class="span-primario"> alumnos </span> </h1>
            </div>

            <div class="flex justify-center">
                <p class="w-full md:w-1/2 lg:w-3/4 text-sm text-gray-500 mt-12">La idea principal de este proyecto es
                    motivar a los alumnos de la
                    carrera
                    de ingeniería en sistemas
                    computacionales (actualmente) que sigan el camino de la enseñanza sin que existan decaídas
                    principalmente a la hora de entender los temas y no hacer complicado el buscar información en sitios
                    donde cobran una cantidad excesiva. Para ello se pensó en hacer una plataforma totalmente gratuita
                    (Puede haber donaciones) para los alumnos que estén inscritos en el Tec Mante donde el contenido
                    principal de la plataforma son los videos cursos sobre los diferentes temas de materias de la
                    carrera,
                    así como publicaciones de dudas que existan (fotos). <br>
                    Para ello la idea es que los alumnos a partir del
                    primer semestre, realicen videos sobre temas en especifico de las materias que estén cursando
                    actualmente o de las que ya cursaron anteriormente (No obligatorio).
                    <br>
                    <br>
                    Todo esto con el fin de armar una comunidad donde haya comunicación y sobresalga el aprendizaje
                    individual de los alumnos de semestres superiores ayudando así a las nuevas generaciones.
                </p>
            </div>
        </section>

        @livewire('statistics')

        @livewire('doubts')

        <section class="container mt-12  ">
            <h1 class="titulo-secciones text-center">Te damos la bienvenida</h1>

            <div class="flex justify-center mt-6 mb-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/t1r79hMbvlk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>

        </section>

        @livewire('footer')


    </x-app-layout>


    <script type="text/javascript" src="{{ asset('js/funciones-home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/contadores-home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>


</body>

</html>
