<x-app-layout>
    <div class="container py-24 grid grid-cols-5">
        <aside>
            <h1 class="title-section">Crear curso</h1>
        </aside>

        <div class="col-span-4 shadow-sm rounded-md  ">
            <div class="container pb-6">
                <h1 class="text-2xl font-bold text-gray-800 mt-2">Información del curso</h1>
                <hr class="mt-2 mb-6">

                {!! Form::open(['route' => 'instructor.courses.store', 'files' => true]) !!}

                @include('instructor.courses.components.form')

                <div class="flex justify-end">
                    {!! Form::submit('Crear curso', ['class' => 'btn-primario']) !!}
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
