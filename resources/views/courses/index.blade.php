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


    {{-- AOS SCROLL --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>


<div class="loading">
    <img class="logo-loader" src="{{ asset('/images/logo.png') }}" alt="">
</div>

<body class="body">



    <x-app-layout>

        <section class="portada-home">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">

                    <div class="col-span-1">
                        <div class="content-home">
                            <div class="content-text-home">
                                <h1 class="title-portada">Construyamos juntos <br>
                                     tus    <span class="span-primario"> habilidades</span> 
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



        @livewire('course-index')


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
