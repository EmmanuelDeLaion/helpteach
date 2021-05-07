<div>
    <section class="contenedor-fondo-animado">
        {{-- <svg class="svg-index" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L60,90.7C120,85,240,75,360,80C480,85,600,107,720,122.7C840,139,960,149,1080,144C1200,139,1320,117,1380,106.7L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg> --}}
        <div class="animacion">
            <span class="uno"></span>
            <span class="dos"></span>
            <span class="tres"></span>
            <span class="cuatro"></span>

            <span class="uno"></span>
            <span class="dos"></span>
            <span class="tres"></span>
            <span class="cuatro"></span>
            
            <span class="uno"></span>
            <span class="dos"></span>
            <span class="tres"></span>
            <span class="cuatro"></span>
        </div>
        <div class="seccion-contenido">
            <div class="contenido">
                <h1>¿No sabes cual curso ver?</h1>
                <p class="text-sm text-center text-white-500">Puedes buscar más cursos en el apartado de todos los
                    cursos</p>
                <button onclick="location.href='{{ route('courses.index') }}'" type="submit"
                    class="btn-primario-outline-blanco   ">
                    Ver cursos
                </button>
            </div>
        </div>
    </section>

</div>
