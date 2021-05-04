<div>

    <style>
        :root {
            /* colores  */
            --color-blanco-fondo: #f7f8fc;
            --color-primario: #1da1f2;
            --color-negro: #22292f;
            --color-negro-primario: #151515;
            /* color botones secundarios  */
            --color-blanco-primario: #f4f4f4;
            --color-blanco-secundario: #e8e8e8;
            --color-gris-fondo: #f6f6f6;
            --color-gris: #9da9b2;
            --color-blanco: #fff;
        }

        .dropdown {
            width: auto;
            position: relative;
        }

        .dropdown:hover .dropdown-list {
            opacity: 1;
            visibility: visible;
        }


        .dropdown-select {
            padding: 10px;
            border-radius: 4px;
            background-color: var(--color-primario);
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
            cursor: pointer;
            color: var(--color-blanco);
        }

        .dropdown-list {
            border-radius: 4px;
            background-color: var(--color-blanco);
            position: absolute;
            top: 110%;
            left: 0;
            right: 0;
            opacity: 0;
            visibility: hidden;
            z-index: 3;
            transition: opacity 0.2s linear, visibility 0.2s linear;
            color: var(--color-primario);
            cursor: pointer;
        }

        .dropdown-list-item {
            padding: 1rem;
            font-size: 14px;
        }

        .dropdown-list-item:hover {
            background-color: var(--color-primario);
            color: var(--color-blanco);
        }

    </style>

    <div class="py-4 filtros">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">


            <div class="dropdown mr-4">
                <div class="dropdown-select">
                    <span class="select mr-4"> <i class="fas fa-list-alt"></i> Todos los cursos</span>
                </div>

            </div>


            <div class="dropdown mr-4">
                <div class="dropdown-select">
                    <span class="select mr-4"> <i class="fas fa-list-ul"></i> Categorias</span>
                    <i class="fa fa-caret-down icon"></i>
                </div>

                <div class="dropdown-list">
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                </div>
            </div>


            <div class="dropdown mr-4">
                <div class="dropdown-select">
                    <span class="select mr-4"> <i class="fas fa-sort-numeric-up-alt"></i> Niveles</span>
                    <i class="fa fa-caret-down icon"></i>
                </div>

                <div class="dropdown-list">
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                </div>
            </div>



            <div class="dropdown">
                <div class="dropdown-select">
                    <span class="select mr-4"> <i class="fas fa-question-circle"></i> Estado</span>
                    <i class="fa fa-caret-down icon"></i>
                </div>

                <div class="dropdown-list">
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                </div>
            </div>

        </div>
    </div>


    <div
        class="grid gap-4 grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-2 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 gap-x-6 gap-y-8 mt-6">

        @foreach ($courses as $course)
            {{-- {{ Storage::url($course->image->url) }} --}}
            <article class="card-cursos mb-12">
                <div class="card-info-hover">
                    <svg class="card-like" viewBox="0 0 24 24">
                        <path fill="#000000"
                            d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                    </svg>
                </div>
                <div class="card-img" style="background-image: url('{{ Storage::url($course->image->url) }}')">
                </div>
                <a class="card-link">
                    <div class="card-img-hover"
                        style="background-image: url('{{ Storage::url($course->image->url) }}')">
                    </div>
                </a>
                <div class="card-info">
                    <span class="card-category">Desarrollo web</span>
                    <h3 class="card-title"> {{ $course->title }} </h3>
                    <span class="card-by">De: <a href="#" class="card-author" title="author">
                            {{ $course->teacher->name }} </a></span>
                    <div class="flex justify-between">
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
                        <p class="text-sm text-gray">
                            <i class=" icon-students fas fa-chalkboard-teacher"></i>
                            ({{ $course->students_count }})
                        </p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button onclick="location.href='{{ route('courses.show', $course) }}'" type="submit"
                        class="w-11/12 btn-ver-curso mb-6 text-center">
                        Más información
                    </button>
                </div>
            </article>


        @endforeach
    </div>



    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        {{ $courses->links() }}
    </div>



</div>
