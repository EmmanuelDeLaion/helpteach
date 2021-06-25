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
            <aside>
                <h1 class="title-section">Edición del curso</h1>
                <ul class="mt-2">
                    <li
                    class="leading-7 mb-1  @routeIs('instructor.courses.edit', $course) border-l-4 border-purple-500 @else border-transparent @endif  pl-2">
                        <a href="{{ route('instructor.courses.edit', $course) }}"
                        class="@routeIs('instructor.courses.edit', $course) font-bold  @else font-normal @endif text-sm text-gray-500 hover:text-purple-500"
                            href="">Información del
                            curso</a>
                    </li>
                    <li
                    class="leading-7 mb-1  @routeIs('instructor.courses.curriculum', $course) border-l-4 border-purple-500 @else border-transparent @endif pl-2">
                        <a href="{{ route('instructor.courses.curriculum', $course) }}"
                        class=" @routeIs('instructor.courses.curriculum', $course) font-bold  @else font-normal @endif text-sm text-gray-500 hover:text-purple-500"
                            href="">Lecciones del curso</a>
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
