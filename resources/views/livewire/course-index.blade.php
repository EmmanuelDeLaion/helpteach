<div>
    <div class="py-4 filtros mt-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <div class="dropdown mr-4">
                <div class="dropdown-select">
                    <a class="select mr-4"> <i class="fas fa-list-alt"></i> Todos los cursos</a>
                </div>
            </div>
            <div class="dropdown mr-4">
                <div class="dropdown-select">
                    <span class="select mr-4"> <i class="fas fa-list-ul"></i> Categorias</span>
                    <i class="fa fa-caret-down icon"></i>
                </div>
                <div class="dropdown-list shadow-lg">
                    @foreach ($categories as $category)
                        <div class="dropdown-list-item"> <a href=""> {{ $category->name }} </a> </div>
                    @endforeach
                </div>
            </div>

            <div class="dropdown mr-4">
                <div class="dropdown-select">
                    <span class="select mr-4"> <i class="fas fa-sort-numeric-up-alt"></i> Niveles</span>
                    <i class="fa fa-caret-down icon"></i>
                </div>
                <div class="dropdown-list">
                    @foreach ($levels as $level)
                        <div class="dropdown-list-item"> <a href=""> {{ $level->name }} </a> </div>
                    @endforeach
                </div>
            </div>

            <div class="dropdown">
                <div class="dropdown-select">
                    <span class="select mr-4"> <i class="fas fa-question-circle"></i> Plataformas</span>
                    <i class="fa fa-caret-down icon"></i>
                </div>
                <div class="dropdown-list">
                    @foreach ($platforms as $platform)
                        <div class="dropdown-list-item"> <a href=""> {{ $platform->name }} </a> </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div
        class="grid gap-4 grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-2 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 gap-x-6 gap-y-8 mt-6">

        @foreach ($courses as $course)
            <article class="card-cursos mb-12">
                <div class="card-info-hover">
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
