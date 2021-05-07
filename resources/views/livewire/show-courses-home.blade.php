<div>

    <section class=" mb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="px-4 sm:px-6 w-full lg:w-1/2">
                <h1 class="titulo-cursos-home">Obtén el conocimiento de los siguientes cursos</h1>
                <p class="mt-2">Estos son los ultimos cursos que se han subido</p>
            </div>
        </div>

        <div
            class="grid gap-4 grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-2 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 gap-x-6 gap-y-8">

            @foreach ($courses as $course)

                {{-- {{ Storage::url($course->image->url) }} --}}
                <article class="card-cursos  mb-12">
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
                                <li> <i
                                        class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray' }}-400 "></i>
                                </li>
                                <li> <i
                                        class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray' }}-400 "></i>
                                </li>
                                <li> <i
                                        class="fas fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'gray' }}-400 "></i>
                                </li>
                                <li> <i
                                        class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray' }}-400 "></i>
                                </li>
                                <li> <i
                                        class="fas fa-star text-{{ $course->rating >= 5 ? 'yellow' : 'gray' }}-400 "></i>
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

        <div class="flex justify-center">
            <button onclick="location.href='{{ route('courses.index') }}'" class="btn-secundario"> Ver más
                cursos</button>
        </div>
    </section>



</div>
