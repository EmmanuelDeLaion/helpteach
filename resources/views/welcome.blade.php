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

<body class="body">



    <div class="loading">
        <img class="logo-loader" src="{{ asset('/images/logo.png') }}" alt="">
    </div>



    <x-app-layout>

        <section class="portada-home" style="background-image: url({{ asset('/images/home/background.jpg') }})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                <div class=" text-home w-full md:w-3/4 lg:w-1/2">
                    <h1 class="h1-titulo-home">Cursa o crea un <span class="span"> curso</span> </h1>
                    <p class="p-subtitulo-home text-sm ">En <span class="span"> HelpTeach </span> podrás encontrar
                        cursos creados por alumnos totalmente gratuitos </p>
                    @livewire('search')
                </div>
            </div>
        </section>


        <div data-aos="fade-up">
            @livewire('statistics')
        </div>


        <div data-aos="fade-up" data-aos-duration="500">
            @livewire('show-courses-home')
        </div>


        <div data-aos="fade-up" data-aos-duration="500">
            @livewire('students-instructor')
        </div>


        <div data-aos="fade-up" data-aos-duration="500">
            @livewire('comments-students')
        </div>

        <div data-aos="fade-up" data-aos-duration="500">
            @livewire('teach')
        </div>


        <div data-aos="fade-up" data-aos-duration="500">
            @livewire('ad')

        </div>

        <div data-aos="fade-up" data-aos-duration="500">
            @livewire('section-start-now')
        </div>


        <div data-aos="fade-up" data-aos-duration="500">
            @livewire('section-see-courses')
        </div>



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
