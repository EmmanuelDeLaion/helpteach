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

        <section class="portada-home" style="background-image: url({{ asset('/images/home/portada-home.png') }})">
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
             <div
                class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 xl:grid-cols-2 gap-6  ">
                <div class="">
                     
                </div>
                <div class="">
                     
                    
                </div>
                
            </div>
        </section>


        @livewire('show-courses-home')
        @livewire('students-instructor')


        @livewire('comments-students')
        @livewire('section-start-now')


        {{-- Footer --}}
        @livewire('section-see-courses')
        @livewire('footer')

    </x-app-layout>


    <script type="text/javascript" src="{{ asset('js/contadores-home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>


</body>

</html>
