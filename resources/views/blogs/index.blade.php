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
                            type="search" name="search" placeholder="¿Que deseas encontrar?">
                        <button type="submit" class="btn-buscar-home absolute right-0 top-0 mt-2 ">
                            buscar
                        </button>

                    </div>
                </div>
            </div>
        </section>

        <div class="container grid gird-cols-1 sm:grid-cols-1 xs:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 mt-6 gap-4 mb-6">

            <div class="col-span-3 xs:col-span-3 sm:col-span-3 md:col-span-2 lg:col-span-2">
                <div class="w-full">
                    <div class="bg-white w-full shadow-2xl rounded-lg mb-6 tracking-wide">
                        <div class="md:flex-shrink-0">
                            <img src="https://concepto.de/wp-content/uploads/2014/08/programacion-2-e1551291144973.jpg"
                                alt="portada" class="w-full h-64 rounded-lg rounded-b-none">
                        </div>
                        <div class="px-6 py-6 mt-2">
                            <div class="author flex items-center -ml-3 my-3">
                                <div class="user-logo">
                                    <img class="w-12 h-12 object-cover rounded-full mx-4  shadow"
                                        src="https://scontent.frex1-1.fna.fbcdn.net/v/t1.6435-9/36627150_1027414267428172_7736275383397384192_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeHLuCwTVUl9H2FWF_U0mo1jUZxsY2u4sI9RnGxja7iwj5aCv90Q9aOgIdZLWSj5atQiTpHXbaMMmaVhqwv7cDzD&_nc_ohc=crarL7eG8GUAX_TLEt2&_nc_ht=scontent.frex1-1.fna&oh=e5d7fa623f95883213f3f853920e5a7f&oe=60C06431"
                                        alt="avatar">
                                </div>
                                <h2 class="text-sm tracking-tighter text-gray-900">
                                    <a href="#">By Jesus Emmanuel De León Lerma</a>
                                    <p><span class="text-sm text-gray-600"> 12 de mayo del 2021 </span></p>
                                </h2>

                            </div>
                            {{-- titulo del blog --}}
                            <h2 class="mr-1 font-bold text-2xl text-gray-800 tracking-normal">Lorem ipsum dolor sit amet
                                consectetur. </h2>

                            {{-- contenido inicial del blog --}}
                            <p class="text-sm text-gray-700 px-2 mr-1">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora reiciendis ad
                                architecto at aut placeat quia, minus dolor praesentium officia maxime deserunt porro
                                amet ab debitis deleniti modi soluta similique...
                            </p>

                            <div class="flex items-center justify-end mt-2 mx-6">
                                <button class="btn-primario-outline">Ver más</button>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

            <div class="col-span-3 xs:col-span-3 sm:col-span-3 md:col-span-1 lg:col-span-1">
                <div class="bg-white border-b-4 border-blue-500 bg-white shadow-2xl rounded-lg mb-6 tracking-wide ">
                    <img src="https://colegiolospinos.ec/wp-content/uploads/2019/11/1533172648445_1.jpg" alt="People"
                        class="w-full rounded-lg object-cover h-32 sm:h-48 md:h-32">
                    <div class="p-4 md:p-6">
                        <h3 class="font-semibold mb-2 text-xl leading-tight sm:leading-normal"> Lorem ipsum dolor sit
                            amet consectetur. </h3>
                        <div class="text-sm flex items-center">
                            <svg class="opacity-75 mr-2" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                width="12" height="12" viewBox="0 0 97.16 97.16"
                                style="enable-background:new 0 0 97.16 97.16;" xml:space="preserve">
                                <path
                                    d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                                <path
                                    d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </svg>
                            <p class="leading-none">21 Oct 2019</p>

                            <button class="btn-primario mx-auto">Ver más</button>
                        </div>
                    </div>
                </div>


                {{-- otro articulo --}}

                <div class="bg-white  border-b-4 border-blue-500 bg-white shadow-2xl rounded-lg mb-6 tracking-wide ">
                    <img src="https://static3-sevilla.abc.es/media/tecnologia/2020/03/09/s/apps-programacion-android-kD7C--620x349@abc.jpg"
                        alt="People" class="w-full rounded-lg object-cover h-32 sm:h-48 md:h-32">
                    <div class="p-4 md:p-6">
                        <h3 class="font-semibold mb-2 text-xl leading-tight sm:leading-normal"> Lorem ipsum dolor sit
                            amet consectetur. </h3>
                        <div class="text-sm flex items-center">
                            <svg class="opacity-75 mr-2" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                width="12" height="12" viewBox="0 0 97.16 97.16"
                                style="enable-background:new 0 0 97.16 97.16;" xml:space="preserve">
                                <path
                                    d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                                <path
                                    d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </svg>
                            <p class="leading-none">21 Oct 2019</p>

                            <button class="btn-primario mx-auto">Ver más</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>



        {{-- footer --}}
        @livewire('section-see-courses')
        @livewire('footer')


    </x-app-layout>


    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>

</body>

</html>
