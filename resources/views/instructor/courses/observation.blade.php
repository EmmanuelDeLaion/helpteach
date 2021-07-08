<x-instructor-layout :course="$course">
    <h1 class="text-2xl font-bold text-gray-800 mt-2">Observaciones del curso</h1>
    <hr class="mt-2 mb-6">

    <div class="container">
        <p class="text-sm text-gray-700 font-bold">{!! $course->observation->body !!}</p>
    </div>

</x-instructor-layout>
