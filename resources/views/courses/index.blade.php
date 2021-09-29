<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <link rel="shortcut icon" href="{{ asset('/images/logo.svg') }}">
    <title>Cursos - HelpTeach</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


    {{-- AOS SCROLL --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <!-- iconos font Awoesome  -->
    <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


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
                                    <p class="text-2xl font-bold text-gray-700"> {{ Auth::user()->name }}</p>
                                @endisset
                                <h1 class="title-portada">Construyamos juntos <br>
                                    tus <span class="span-primario"> habilidades</span>
                                </h1>
                                @livewire('search')
                            </div>
                            <p class="frase-home">“Hay que unirse,
                                no para estar juntos,
                                sino para hacer algo juntos.”</p>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="img-portada-cursos">
                            <img class="img-personas-cursos" src="{{ asset('/images/personas.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        @livewire('courses-index')


        @livewire('doubts')

        @livewire('comments-students')


        @livewire('footer')
    </x-app-layout>

    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>

    {{-- AOS SCROLL --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>
        AOS.init();
    </script>


</body>

</html>
