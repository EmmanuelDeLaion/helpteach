<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>

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

        <section class="portada-show-course">
            <div
                class="mx-auto grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1 px-4 mt-2">

                <div class=" mx-auto px-4 sm:px-6 lg:px-8 py-24 titulos-show-courses">

                    <h1 class="titulo-titulo-course"> {{ $course->title }} </h1>
                    <p class="textos mt-6"> {{ $course->subtitle }} </p>
                    <p> {{ $course->description }} </p>

                    <ul class="mt-6">
                        <li>
                            <p class="textos"> <span class="span-primario"> <i class="fas fa-sort-numeric-up-alt"></i>
                                </span> Nivel: <span class="span-primario"> {{ $course->level->name }}</span> </p>
                        </li>

                        <li>
                            <p class="textos"> <span class="span-primario"><i class="fas fa-list-ol"></i> </span>
                                Categoria: <span class="span-primario">
                                    {{ $course->category->name }} </span> </p>
                        </li>

                        <li>
                            <p class="textos"> <span class="span-primario"> <i class="fas fa-users"></i></span>
                                Estudiantes: <span class="span-primario">
                                    {{ $course->students_count }} </span> </p>
                        </li>

                        <li>
                            <p class="textos"> <span class="span-primario"> <i class="far fa-calendar-alt"></i> </span>
                                Fecha de lanzamiento: <span class="span-primario">
                                    {{ $course->created_at }} </span> </p>
                        </li>


                    </ul>

                    <div class="flex justify-between mt-2">
                        <ul class="rating flex text-sm">
                            <li> <i class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray' }}-400 "></i>
                            </li>
                            <li> <i class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray' }}-400 "></i>
                            </li>
                            <li> <i class="fas fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'gray' }}-400 "></i>
                            </li>
                            <li> <i class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray' }}-400 "></i>
                            </li>
                            <li> <i class="fas fa-star text-{{ $course->rating >= 5 ? 'yellow' : 'gray' }}-400 "></i>
                            </li>
                        </ul>

                    </div>

                    <button class="btn-primario">Ver temario</button>
                </div>

                <div class="w-full">
                    <img class="img-show-course" src="{{ Storage::url($course->image->url) }}" alt="">
                </div>

            </div>

        </section>

        {{-- {{ $course }} --}}


    </x-app-layout>


    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>

</body>

</html>
