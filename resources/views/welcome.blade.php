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

        {{-- <section class="portada-home" style="background-image: url({{ asset('/images/home/background.jpg') }})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                <div class=" text-home w-full md:w-3/4 lg:w-1/2">
                    <h1 class="h1-titulo-home">Cursa o crea un <span class="span"> curso</span> </h1>
                    <p class="p-subtitulo-home text-sm ">En <span class="span"> HelpTeach </span> podrás encontrar
                        cursos creados por alumnos totalmente gratuitos </p>
                    @livewire('search')
                </div>
            </div>
        </section> --}}

        <section class="portada-home">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">

                    <div class="col-span-1">
                        <div class="content-home">
                            <div class="content-text-home">
                                <h1 class="title-portadas">Encuentra <span class="span-primario"> cursos</span> <br>
                                    gratuitos para ti</h1>
                                <input class="input" placeholder="¿Qué estas buscando?" type="text">
                                <button class="btn-primario">Buscar</button>
                            </div>
                            <p class="frase-home">“Unirse es el comienzo, estar juntos es el
                                progreso, trabajar juntos es el éxito.”</p>
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


        <div class="section-dark">
            <h1 class="text-center titulo-secciones">Obtiene el conocimiento de nuestros <br> 
               <span class="span-primario">alumnos instructores</span> 
            </h1>

            <p class="text-center">Incribete a uno de los cursos creados por los mismos alumnos de la institución</p>
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
