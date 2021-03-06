<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('/images/logo.svg') }}">
    <title>Acerca de Helpteach</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body class="body">


    <x-loading></x-loading>


    <x-app-layout>
 
        <div class="text-white mt-0 border border-blue-800 py-0 w-full h-full relative overflow-hidden"
            style="height: 100vh; background-image:url('https://demos.onepagelove.com/html/leno/images/header-background.jpg')">
            <section class="px-2 lg:px-0 sm:mt-32 flex w-full container mx-auto pb-16">
                <div class="w-full text-white flex justify-center md:justify-start text-center md:text-left">
                    <div class="md:w-1/2 w-full">

                        <div class="flex justify-center md:justify-start mt-36">
                            <img width="200" src="{{ asset('/images/logo-blanco.png') }}" alt="">
                        </div>

                        
                        <h2 class="leading-none mt-6  font-bold text-2xl xs:text-2x1 md:text-5xl lg:6x1 uppercase">
                            ¿Que es <span class="text-purple-500">Helpteach</span>?</h2>
                        <p class="mt-6 mb-6">Plataforma de cursos en linea hechos por alumnos para alumnos
                        </p>
                        <button
                            class="px-16 rounded-full bg-purple-500 text-white font-bold p-4 uppercase border-purple-500 border">
                            Ver más
                        </button>
                    </div>
                    <div class="  imagen-dispositivos">
                        <img src="{{ asset('images/about/dispositivos.png') }}"
                            alt="Mobile Phone" />
                    </div>
                </div>
            </section>

        </div>


        <section class="container">

            <div class="flex justify-center mt-12">
                <img width="200" src="{{ asset('/images/logo.png') }}" alt="">
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
