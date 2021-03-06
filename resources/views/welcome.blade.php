<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('/images/logo.svg') }}">
    <title>Home - Helpteach</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


    {{-- AOS SCROLL --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>



<body class="body">

    <x-loading></x-loading>


    <x-app-layout>


        <section class="portada-home">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">

                    <div class="col-span-1">
                        <div class="content-home">
                            <div class="content-text-home">
                                @isset(Auth::user()->name)
                                    <p class="text-sm text-gray-700">Hola, bienvenido</p>
                                    <p class="text-2xl font-bold text-gray-700"> {{ Auth::user()->name }}</p>
                                @endisset

                                <h1 class="title-portada mt-2">Encuentra <span class="span-primario"> cursos</span> <br>
                                    gratuitos para ti</h1>
                                @livewire('search')
                            </div>
                            <p class="frase-home">???Unirse es el comienzo, estar juntos es el
                                progreso, trabajar juntos es el ??xito.???</p>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="img-portada-home">
                            <img class="img-persona-home" src="{{ asset('/images/persona1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="mt-6" data-aos="fade-up">
            @livewire('statistics')
        </div>



        <div data-aos="fade-up" data-aos-duration="500">
            @livewire('show-courses-home')
        </div>


        @livewire('students-instructor')


        @livewire('comments-students')

        <div data-aos="fade-up" data-aos-duration="500">
            @livewire('teach')
        </div>


        @livewire('ad')


        <div data-aos="fade-up" data-aos-duration="500">
            @livewire('section-start-now')
        </div>


        @livewire('section-see-courses')





        {{-- Footer --}}
        @livewire('footer')

    </x-app-layout>


    <script type="text/javascript" src="{{ asset('js/contadores-home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>


    {{-- AOS SCROLL --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>
        AOS.init();
    </script>


</body>

</html>
