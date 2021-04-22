<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>

   
  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

    
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
 </head>
<body class="body">
    
    <x-app-layout>
     
        <section class="portada-home seccion">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
                <div class=" text-home w-full md:w-3/4 lg:w-1/2">
                    <h1 class="h1-titulo-home">Cursa o crea un <span class="span"> curso</span> </h1>
                    <p class="p-subtitulo-home text-lg ">En <span class="span"> HelpTeach </span>  podrás encontrar cursos creados por alumnos totalmente gratuitos </p>
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                          type="search" name="search" placeholder="¿Que deseas aprender?">
                          <button type="submit" class="btn-buscar-home absolute right-0 top-0 mt-2 ">
                              buscar
                          </button>
                          <p class="typing p-typing mt-2"></p>
                      </div>
                </div>
                <img class="ilustracion-h  " src="{{ asset('/images/home/ilustracion-home.png') }}" alt="ilustacion">
                <img class="ilustracion-libreta  full-image" src="{{ asset('/images/home/ilustracion-libreta.png') }}" alt="">

            </div>
            </section>


            <section class="seccion seccion-enseñar">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">

                    <div class="titulos-enseñar">
                    <h1 class="h1-titulo-enseñar">Ayudar a <br> enseñar</h1>
                    <p class="p-subtitulo-home">Regístrate y crea cursos <br> para las nuevas generaciones</p>
                    <button onclick="location.href = '#camino' " class="btn-principal-outline">Regístrate ahora</button>
                </div>
                <img class="ilustracion-manos-enseñar  " src="{{ asset('/images/home/ilustracion-manos.png') }}" alt="">
                </div>
            </section>


            <section class="">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                    <div class="px-4 sm:px-6 w-full lg:w-1/2">
                        <h1 class="titulo-cursos-home">Obtén el conocimiento de los siguientes cursos</h1>
                        <p class="mt-2">Estos son los ultimos cursos que se han subido</p>
                    </div>
                
                </div>
            </section>


            <section id="camino" class="seccion portada-home">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                    <div class="titulos-camino-enseñanza w-full md:w-3/4 lg:w-1/2">
                    <h1 class="h1-titulo-enseñar">Sigue el camino <br> de la enseñanza</h1>
                    <p class="p-subtitulo-home"> Motivar a los alumnos que sigan el camino de la enseñanza sin que existan decaídas principalmente a la hora de entender los temas y no hacer complicado el buscar información en sitios donde cobran una cantidad excesiva </p>
                    <button class="btn-principal-outline">Ver más</button>
                </div>
                <img class="ilustracion-camino" src="{{ asset('/images/home/ilustracion-camino-enseñanza.png') }}" alt="">
                <img class="ilustracion-planeta" src="{{ asset('/images/home/ilustracion-planeta.png') }}" alt="">    
            </div>
            </section>


 
                <div class="bottom">
                  <center class="center">
                    <span class="credit">Created By <a target="_blanck" href="http://emmanueldl.tecdevsmx.com/#/home">EmmanuelDL</a> | </span>
                    <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
                  </center>
                </div>
 

            

    </x-app-layout>

  
    <script type="text/javascript" src="{{ asset('js/funciones-home.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/funcion-scroll.js') }}" ></script>

</body>
</html>




