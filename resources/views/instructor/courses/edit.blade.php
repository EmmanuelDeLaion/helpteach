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

        <div class="col-span-4 shadow-sm rounded-md border-l-2 border-purple-400">
            <div class="container pb-6">
                <h1 class="text-2xl font-bold text-gray-800 mt-2">Información del curso</h1>
                <hr class="mt-2 mb-6">

                {!! Form::model($course, ['route' => ['instructor.courses.update', $course], 'method' => 'put', 'files' => 'true']) !!}
                <div class="mb-4">
                    {!! Form::label('title', 'Titulo del curso:') !!}
                    {!! Form::text('title', null, ['class' => 'form-input rounded-sm block pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none']) !!}
                </div>

                <div class="mb-4">
                    {!! Form::label('slug', 'Slug del curso:') !!}
                    {!! Form::text('slug', null, ['class' => 'form-input rounded-sm block pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none']) !!}
                </div>

                <div class="mb-4">
                    {!! Form::label('subtitle', 'Subtitulo del curso:') !!}
                    {!! Form::text('subtitle', null, ['class' => 'form-input rounded-sm block pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none']) !!}
                </div>

                <div class="mb-4">
                    {!! Form::label('description', 'Descripción del curso:') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-input rounded-sm block pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none']) !!}
                </div>

                <div class="flex justify-start">
                    <div class="mr-2">
                        {!! Form::label('category_id', 'Categoría:') !!}
                        {!! Form::select('category_id', $categories, null, ['class' => 'w-full form-input rounded-sm  pr-6 py-2   bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none']) !!}
                    </div>
                    <div class="mr-2">
                        {!! Form::label('level_id', 'Nivel:') !!}
                        {!! Form::select('level_id', $levels, null, ['class' => 'w-full form-input rounded-sm  pr-6 py-2   bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none']) !!}
                    </div>
                    <div class="mr-2">
                        {!! Form::label('price_id', 'Precio:') !!}
                        {!! Form::select('price_id', $prices, null, ['class' => 'w-full form-input rounded-sm  pr-6 py-2   bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none']) !!}
                    </div>
                </div>

                <h1 class="text-2xl font-bold text-gray-800 mt-6">Imagen del curso</h1>
                <hr class="mt-2 mb-6">

                <div class="flex justify-between">
                    <figure style="max-width: 500px;">
                        <img id="picture" class="w-full   bg-cover bg-center"
                            src="{{ Storage::url($course->image->url) }}" alt="">
                    </figure>

                    <div class="ml-2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ullam ab dolore? Quidem
                            asperiores officia, explicabo autem sunt quis non.
                        </p>
                        {!! Form::file('file', ['class' => 'w-full form-input rounded-sm  pr-6 py-2   bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none', 'id' => 'file']) !!}
                    </div>
                </div>

                <div class="flex justify-end">
                    {!! Form::submit('Actualizar información', ['class' => 'btn-primario']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-slot name="js">

        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

        <script>
            //Slug automático
            document.getElementById("title").addEventListener('keyup', slugChange);

            function slugChange() {
                title = document.getElementById("title").value;
                document.getElementById("slug").value = slug(title);
            }

            function slug(str) {
                var $slug = '';
                var trimmed = str.trim(str);
                $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                replace(/-+/g, '-').
                replace(/^-|-$/g, '');
                return $slug.toLowerCase();
            }



            //CKEDITOR

            ClassicEditor
                .create(document.querySelector('#description'), {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote'],
                    heading: {
                        options: [{
                                model: 'paragraph',
                                title: 'Paragraph',
                                class: 'ck-heading_paragraph'
                            },
                            {
                                model: 'heading1',
                                view: 'h1',
                                title: 'Heading 1',
                                class: 'ck-heading_heading1'
                            },
                            {
                                model: 'heading2',
                                view: 'h2',
                                title: 'Heading 2',
                                class: 'ck-heading_heading2'
                            }
                        ]
                    }
                })
                .catch(error => {
                    console.log(error);
                });

            //Cambiar imagen
            document.getElementById("file").addEventListener('change', cambiarImagen);

            function cambiarImagen(event) {
                var file = event.target.files[0];

                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("picture").setAttribute('src', event.target.result);
                };

                reader.readAsDataURL(file);
            }
        </script>


    </x-slot>

</x-app-layout>
