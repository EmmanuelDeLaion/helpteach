<x-instructor-layout>

    <x-slot name="course">
        {{ $course->slug }}
    </x-slot>

    @if (session('info-create-course'))
        <div class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 alerta-info">
            <div
                class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                <span class="text-green-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="alert-content ml-4">
                <div class="alert-title font-semibold text-lg text-green-800">
                    Curso creado
                </div>
                <div class="alert-description text-sm text-green-600">
                    {{ session('info-create-course') }}
                </div>
            </div>
        </div>
    @endif
    @if (session('info-update-course'))
        <div class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 alerta-info">
            <div
                class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                <span class="text-green-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
            <div class="alert-content ml-4">
                <div class="alert-title font-semibold text-lg text-green-800">
                    Curso Actualizado
                </div>
                <div class="alert-description text-sm text-green-600">
                    {{ session('info-update-course') }}
                </div>
            </div>
        </div>
    @endif
    <h1 class="text-2xl font-bold text-gray-800 mt-2">Información del curso</h1>
    <hr class="mt-2 mb-6">
    {!! Form::model($course, ['route' => ['instructor.courses.update', $course], 'method' => 'put', 'files' => 'true']) !!}
    @include('instructor.courses.components.form')
    <div class="flex justify-end">
        {!! Form::submit('Actualizar información', ['class' => 'btn-primario cursor-pointer']) !!}
    </div>
    {!! Form::close() !!}




    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/instructor/courses/form.js') }}"></script>
        <script src="{{ asset('js/instructor/courses/alerta.js') }}"></script>
    </x-slot>

</x-instructor-layout>
 
