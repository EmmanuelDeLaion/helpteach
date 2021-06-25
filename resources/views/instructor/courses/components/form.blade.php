<div class="mb-4">
    {!! Form::label('title', 'Titulo del curso:', ['class' => 'font-bold']) !!}
    {!! Form::text('title', null, ['class' => 'form-input rounded-sm block pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none' . ($errors->has('title') ? 'border border-red-500' : '')]) !!}

    @error('title')
        <p class="text-red-400 text-sm"> {{ $message }} </p>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug del curso:', ['class' => 'font-bold']) !!}
    {!! Form::text('slug', null, ['readonly' => 'readonly', 'class' => 'form-input rounded-sm block pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none' . ($errors->has('title') ? 'border border-red-500' : '')]) !!}
    @error('slug')
        <p class="text-red-400 text-sm"> {{ $message }} </p>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'Subtitulo del curso:', ['class' => 'font-bold']) !!}
    {!! Form::text('subtitle', null, ['class' => 'form-input rounded-sm block pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none' . ($errors->has('title') ? 'border border-red-500' : '')]) !!}
    @error('subtitle')
        <p class="text-red-400 text-sm"> {{ $message }} </p>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('description', 'Descripción del curso:', ['class' => 'font-bold']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-input rounded-sm block pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none' . ($errors->has('title') ? 'border border-red-500' : '')]) !!}
    @error('description')
        <p class="text-red-400 text-sm"> {{ $message }} </p>
    @enderror
</div>

<div class="flex justify-start">
    <div class="mr-2">
        {!! Form::label('category_id', 'Categoría:', ['class' => 'font-bold']) !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'w-full form-input rounded-sm  pr-6 py-2   bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none']) !!}
        @error('category_id')
            <p class="text-red-400 text-sm"> {{ $message }} </p>
        @enderror
    </div>
    <div class="mr-2">
        {!! Form::label('level_id', 'Nivel:', ['class' => 'font-bold']) !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'w-full form-input rounded-sm  pr-6 py-2   bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none']) !!}
        @error('level_id')
            <p class="text-red-400 text-sm"> {{ $message }} </p>
        @enderror
    </div>
    <div class="mr-2">
        {!! Form::label('price_id', 'Precio:', ['class' => 'font-bold']) !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'w-full form-input rounded-sm  pr-6 py-2   bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none']) !!}
        @error('price_id')
            <p class="text-red-400 text-sm"> {{ $message }} </p>
        @enderror
    </div>
</div>

<h1 class="text-2xl font-bold text-gray-800 mt-6">Imagen del curso</h1>
<hr class="mt-2 mb-6">

<div class="flex justify-between">
    <figure style="max-width: 500px;">
        @isset($course->image)
            <img id="picture" class="w-full   object-cover object-center" src="{{ Storage::url($course->image->url) }}"
                alt="">
        @else
            <img id="picture" class="w-full   object-cover object-center" src="{{ asset('images/logo.png') }}" alt="">
        @endisset
    </figure>

    <div class="ml-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ullam ab dolore? Quidem
            asperiores officia, explicabo autem sunt quis non.
        </p>
        {!! Form::file('file', ['class' => 'w-full form-input rounded-sm  pr-6 py-2 bg-white text-sm placeholder-gray-400 text-gray-500 focus:bg-white focus:placeholder-gray-600 focus:outline-none'  . ($errors->has('file') ? 'border border-red-500' : '') ,  'id' => 'file', 'accept' => 'image/*']) !!}
        @error('file')
            <p class="text-red-400 text-sm"> {{ $message }} </p>
        @enderror
    </div>
</div>
