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
        @isset($course)
            <img id="picture" class="w-full   object-cover object-center" src="{{ Storage::url($course->image->url) }}"
                alt="">
        @else
            <img id="picture" class="w-full   object-cover object-center"
                src="https://images.pexels.com/photos/5553074/pexels-photo-5553074.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                alt="">
        @endisset
    </figure>

    <div class="ml-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ullam ab dolore? Quidem
            asperiores officia, explicabo autem sunt quis non.
        </p>
        {!! Form::file('file', ['class' => 'w-full form-input rounded-sm  pr-6 py-2   bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none', 'id' => 'file']) !!}
    </div>
</div>
