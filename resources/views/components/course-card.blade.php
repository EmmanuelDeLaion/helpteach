@props(['course'])

<article onclick="location.href='{{ route('courses.show', $course) }}'" class="card-cursos mb-12">
    <div class="card-info-hover">
    </div>
    <div class="card-img">
    </div>
    <a href="{{ route('courses.show', $course) }}" class="card-link">
        <div class="card-img-hover" style="background-image: url('{{ Storage::url($course->image->url) }}')">
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
    <div class="flex justify-center mb-3">
        <button onclick="location.href='{{ route('courses.show', $course) }}'" type="submit"
            class="boton-curso w-11/12 btn-ver-curso text-center">
            Más información
        </button>
    </div>
</article>
