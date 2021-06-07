<div>

    <div class="seccion-numeros relative">
        <img class="puntos-derecha" src="{{ asset('/images/home/puntos.png') }}" alt="ilustracion puntos">
        <img class="puntos-izquierda" src="{{ asset('/images/home/puntos.png') }}" alt="ilustracion puntos">
        <div class="container-num">
            <h1 class="text-center mt-6 title-statistics"> Estudia y practica en <span class="span-numeros">
                    HelpTeach</span> </h1>
            <div
                class="justify-center mx-auto grid grid-cols-1 lg:grid-cols-4 xl:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1 px-4 mt-2">
                <div class="contador">
                    <h1 class="text-center title-numbers contador_cantidad" id="cont1" data-cantidad-total="105">
                        0</h1>
                    <p class="text-center p">Alumnos inscritos</p>
                </div>
                <div class="contador">
                    <h1 class="text-center title-numbers contador_cantidad" id="cont2" data-cantidad-total="20">0
                    </h1>
                    <p class="text-center p">Alumnos instructores</p>
                </div>
                <div class="contador">
                    <h1 class="text-center title-numbers contador_cantidad" id="cont3" data-cantidad-total="70">0
                    </h1>
                    <p class="text-center p">Cursos disponibles</p>
                </div>
                <div class="flex justify-center items-center">
                    <button onclick="location.href='{{ route('about.index') }}'" class="btn-primario-outline">Ver más
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
