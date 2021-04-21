<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
 </head>
<body>
    
    <x-app-layout>
     
        <section class="portada-home">
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
                      </div>
                </div>

                <img class="ilustracion-h" src="{{ asset('/images/home/ilustracion-home.png') }}" alt="ilustacion">
                
            </div>
            
            </section>
       
    </x-app-layout>

    
</body>
</html>




