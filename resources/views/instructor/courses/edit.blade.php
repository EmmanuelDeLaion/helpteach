<x-app-layout>
    <div class="container py-24 grid grid-cols-5">
        <aside>
            <h1 class="title-section">Edición del curso</h1>

            <ul class="mt-2">
                <li class="leading-7 mb-1 border-l-4 border-purple-500 pl-2">
                    <a class="font-bold text-sm text-gray-500 hover:text-purple-500" href="">Información del curso</a>
                </li>

                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a class="text-sm text-gray-500 hover:text-purple-500" href="">Lecciones del curso</a>
                </li>

                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a class="text-sm text-gray-500 hover:text-purple-500" href="">Metas del curso</a>
                </li>

                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a class="text-sm text-gray-500 hover:text-purple-500" href="">Estudiantes</a>
                </li>
            </ul>
        </aside>

        <div class="col-span-4 shadow-sm rounded-md  ">
            <div class="container pb-6">
                <h1 class="text-2xl font-bold text-gray-800 mt-2">Información del curso</h1>
                <hr class="mt-2 mb-6">

                {!! Form::model($course, ['route' => ['instructor.courses.update', $course], 'method' => 'put', 'files' => 'true']) !!}
                 
                @include('instructor.courses.components.form')

                <div class="flex justify-end">
                    {!! Form::submit('Actualizar información', ['class' => 'btn-primario']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-slot name="js">

        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

        <script src="{{ asset('js/instructor/courses/form.js') }}"></script>

    </x-slot>

</x-app-layout>

@livewire('footer')
