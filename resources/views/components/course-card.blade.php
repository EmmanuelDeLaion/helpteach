@props(['course'])


{{-- card cursos --}}
<div onclick="location.href='{{ route('courses.show', $course) }}'"
    class="w-full max-w-sm overflow-hidden rounded border bg-white shadow hover:border-purple-500 hover:shadow-lg">
    <div class="relative">
        <div title="{{ $course->title }}" class="h-48 bg-cover bg-no-repeat bg-center"
            style="background-image: url({{ Storage::url($course->image->url) }})">
        </div>
        <div style="background-color: rgba(0,0,0,0.6)"
            class="absolute bottom-0 mb-2 ml-3 px-2 py-1 rounded text-sm text-white">
            {{ $course->price->name }}
        </div>
        <div style="bottom: -20px;" class="absolute right-0 w-10 mr-2">
            <a>
                <img width="50px" class="rounded-full border-2 border-white"
                    src="{{ $course->teacher->profile_photo_url }}">
            </a>
        </div>
    </div>
    <div class="p-3">
        <p class="text-sm font-bold text-purple-500">
            {{ $course->category->name }}
        </p>

        <h3 class="mr-10 text-sm truncate-2nd">
            <a class="hover:text-purple-500 font-bold" href="{{ route('courses.show', $course) }}">
                {{ $course->title }}
            </a>
        </h3>

        <div class="flex items-start justify-between">
            <p class="text-xs text-gray-500">
                {{ $course->subtitle }}
            </p>
        </div>

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
            <p class="text-sm text-gray-700">
                <i class=" icon-students fas fa-chalkboard-teacher"></i>
                ({{ $course->students_count }})
            </p>
        </div>

        <button onclick="location.href='{{ route('courses.show', $course) }}'" class="btn-primario-outline w-full">Ir
            al curso</button>

    </div>
</div>
{{-- fin card cursos --}}
