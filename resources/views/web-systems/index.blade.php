<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('/images/logo.svg') }}">
    <title>Sistemas web</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body class="body">


    <x-loading></x-loading>


    <x-app-layout>

        <div class="text-white mt-0 border border-blue-800 py-0 w-full h-full relative overflow-hidden" >
            <section class="px-2 lg:px-0 sm:mt-32 flex w-full container mx-auto pb-16">
            </section>
        </div>


        <section class="container">

            <div class="portada-policies">
                <div>
                    <h1 class="mt-4 title-section  "> Sistemas<span class="span-primario">web </span></h1>
                    <p class="text-sm text-gray-500 mt-2 text-center">Actualizado el 18/05/2022</p>
                </div>

            </div>


            {{-- <div class="flex justify-center mt-10">
                <img width="200" src="{{ asset('/images/logo.png') }}" alt="">
            </div> --}}


            <div class="flex justify-center">

                <div class="w-full md:w-1/2 lg:w-3/4 ">

                    <h1 class="mt-4 title-section  ">Definición y terminos clave </h1>
                    <p class="text-md text-gray-500 mt-5">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aut deserunt voluptatum odit quo consequuntur alias impedit vel? Dignissimos, facilis voluptates tempore quas veritatis corrupti mollitia numquam error assumenda labore quo quisquam suscipit, aperiam illo delectus alias harum minima velit fugiat nemo. Repellat neque culpa ullam autem eveniet illum beatae tempora laudantium maxime soluta. Quas, corrupti id sit laborum dicta adipisci est animi praesentium eveniet quam rem veniam consectetur alias perspiciatis sed natus fuga totam officiis. Consequuntur beatae distinctio excepturi ducimus ex quod laudantium possimus laboriosam hic dolorum at voluptas aperiam incidunt sit aut, nemo illo nostrum corrupti est necessitatibus!
                    </p>

                    <br>
                        <h1 class="mt-4 title-section  ">¿Que información recopilamos? </h1>
                        <p class="text-md text-gray-500 mt-5 mb-5">
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum eligendi ex repellendus incidunt, accusantium fugit minima architecto exercitationem omnis adipisci nihil labore alias natus atque ea quibusdam ab voluptates. Obcaecati vero ipsam natus, quibusdam animi provident perferendis nihil maxime esse delectus totam, distinctio facere ipsa voluptatem dolorum ut fugit voluptate omnis minima praesentium id perspiciatis. Ut numquam soluta voluptatem alias reiciendis, porro maiores vel enim repellat beatae modi vitae facere ad voluptates laboriosam qui fugit voluptate sint rerum eligendi libero sit magni. Error ratione molestias dolorum animi quidem aspernatur, in nisi, illo esse earum dolor. Molestias non aperiam facilis.
                        </p>





                </div>


            </div>
        </section>



        @livewire('footer')


    </x-app-layout>


    <script type="text/javascript" src="{{ asset('js/funciones-home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/contadores-home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>


</body>

</html>
