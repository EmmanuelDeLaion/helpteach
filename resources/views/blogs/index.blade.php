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

    <link rel="stylesheet" href="{{ asset('css/estilos-blogs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body class="body">

    <div class="loading">
        <img class="logo-loader" src="{{ asset('/images/logo.png') }}" alt="">
   </div>

    <x-app-layout>

        <section class="portada-blogs">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class=" text-home w-full md:w-3/4 lg:w-1/2">
                    <h1 class="h1-titulo-home">Blog </h1>
                    <p class="p-subtitulo-home text-lg ">¿Estas buscando algo en particular? </p>
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input
                            class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                            type="search" name="search" placeholder="¿Que deseas aprender?">
                        <button type="submit" class="btn-buscar-home absolute right-0 top-0 mt-2 ">
                            buscar
                        </button>

                        {{-- <nav class="nav-busquedas">
                            <ul class="ul-busquedas">
                                <li class="li-busquedas"> <a class="a-busquedas" href="">Diseño web</a></li>
                                <li class="li-busquedas"> <a class="a-busquedas" href="">Programación</a></li>
                                <li class="li-busquedas"> <a class="a-busquedas" href="">Calculo</a></li>
                                <li class="li-busquedas"><a class="a-busquedas" href="">Ingles</a></li>
                            </ul>
                        </nav> --}}

                    </div>
                </div>
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


    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>

</body>

</html>
