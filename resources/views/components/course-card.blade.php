@props(['course'])

<li>
    <a href="{{ route('courses.show', $course) }}" class="card">
        <img src="{{ Storage::url($course->image->url) }}" class="card__image" alt="" />

        <div class="card__overlay">
            <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                    <path />
                </svg>
                <img class="card__thumb" src="{{ $course->teacher->profile_photo_url }}" alt="" />
                <div class="card__header-text">
                    <h3 class="card__title">{{ $course->title }}</h3>
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
                        <p class="text-sm text-white">
                            <i class=" icon-students fas fa-chalkboard-teacher"></i>
                            ({{ $course->students_count }})
                        </p>
                    </div>
                </div>
            </div>
            <p class="card__description">{{ $course->category->name }}</p>
        </div>
    </a>
</li>
