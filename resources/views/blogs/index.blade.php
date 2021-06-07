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

<div class="loading">
    <img class="logo-loader" src="{{ asset('/images/logo.png') }}" alt="">
</div>

<body class="body">

    <x-app-layout>

        <section class="portada-blogs">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class=" text-home w-full md:w-3/4 lg:w-1/2">
                    <h1 class="h1-titulo-home">Blog </h1>
                    <p class="p-subtitulo-home text-lg ">¿Estas buscando algo en particular? </p>
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input
                            class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                            type="search" name="search" placeholder="¿Que deseas encontrar?">
                        <button type="submit" class="btn-buscar-home absolute right-0 top-0 mt-2 ">
                            buscar
                        </button>

                    </div>
                </div>
            </div>
        </section>







        {{-- footer --}}
        @livewire('section-see-courses')
        @livewire('footer')


    </x-app-layout>


    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>

</body>

</html>
