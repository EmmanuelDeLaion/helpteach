<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- iconos font Awoesome  -->
    <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>

</head>


<body class="body">

    <x-jet-banner />

    <div class="min-h-screen bg-white">
        {{-- Menu de Navegacion --}}
        @livewire('navigation-menu')

        <div style="width: 100%; height: 68px; background-color: #705df2; position: fixed; z-index: 2; opacity: 0.5;">
        </div>

        <!-- Contenido de la pagina -->
        <div class="container py-24 grid grid-cols-5">

            <aside class="col-span-5 md:col-span-1">
                <h1 class="title-section">Edición del curso</h1>
                <ul class="mt-2">
                    <li onclick="location.href='{{ route('instructor.courses.edit', $course) }}'"
                    class="leading-7 mb-1  cursor-pointer  border-l-4 border-transparent pl-2  @routeIs('instructor.courses.edit', $course) font-bold bg-purple-500 text-white  rounded-sm @else text-gray-500 hover:bg-purple-100 rounded-sm font-normal @endif">
                        <a class="text-sm" >Información del curso</a>
                    </li>

                    <li onclick="location.href='{{ route('instructor.courses.curriculum', $course) }}'"
                    class="leading-7 mb-1  cursor-pointer  border-l-4 border-transparent pl-2  @routeIs('instructor.courses.curriculum', $course) font-bold bg-purple-500 text-white  rounded-sm @else text-gray-500 hover:bg-purple-100 rounded-sm font-normal @endif">
                        <a class="text-sm">Lecciones del curso</a>
                    </li>

                    <li onclick="location.href='{{ route('instructor.courses.goals', $course) }}'"
                    class="leading-7 mb-1  cursor-pointer  border-l-4 border-transparent pl-2  @routeIs('instructor.courses.goals', $course) font-bold bg-purple-500 text-white  rounded-sm @else text-gray-500 hover:bg-purple-100 rounded-sm font-normal @endif">
                        <a class="text-sm">Metas del curso</a>
                    </li>

                    <li onclick="location.href='{{ route('instructor.courses.students', $course) }}'"
                    class="leading-7 mb-1  cursor-pointer  border-l-4 border-transparent pl-2  @routeIs('instructor.courses.students', $course) font-bold bg-purple-500 text-white  rounded-sm @else text-gray-500 hover:bg-purple-100 rounded-sm font-normal @endif">
                        <a class="text-sm">Estudiantes del curso</a>
                    </li>

                </ul>
            </aside>

            <div class="col-span-5 md:col-span-4 shadow-sm rounded-md  ">
                <main class="container pb-6">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts

    @isset($js)
        {{ $js }}
    @endisset


</body>

</html>
