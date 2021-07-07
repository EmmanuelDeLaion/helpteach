<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('/images/logo.svg') }}">
    <title>Instructores - Helpteach</title>
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

                <ul class="mt-2 mb-6">
                    <li onclick="location.href='{{ route('instructor.courses.edit', $course) }}'"
                    class="leading-7 mb-1  cursor-pointer  border-l-4 border-transparent pl-2  @routeIs('instructor.courses.edit', $course) font-bold bg-purple-500 text-white  rounded-sm @else text-gray-500 hover:bg-purple-100 rounded-sm font-normal @endif">
                        <a class="text-sm">Información del curso</a>
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



                @switch($course->status)
                    @case(1)
                        <form action="{{ route('instructor.courses.status', $course) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-primario-outline">Solicitar aprobación</button>
                        </form>
                    @break

                    @case(2)
                        <div
                            class="alert flex flex-row items-center bg-yellow-200 p-5 rounded border-b-2 border-yellow-300 alerta-info">
                            <div
                                class="alert-icon flex items-center bg-yellow-100 border-2 border-yellow-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                                <span class="text-yellow-500">
                                    <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="alert-content ml-4">
                                <div class="alert-title font-semibold text-lg text-yellow-800">
                                    Curso en revisión
                                </div>
                                <div class="alert-description text-sm text-yellow-600">
                                    Este curso se mandó a revisión
                                </div>
                            </div>
                        </div>
                    @break

                    @case(3)
                        <div
                            class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 alerta-info">
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
                                    Curso publicado
                                </div>
                                <div class="alert-description text-sm text-green-600">
                                    Este curso se ha publicado correctamente
                                </div>
                            </div>
                        </div>
                    @break

                    @default

                @endswitch




            </aside>

            <div class="col-span-5 md:col-span-4 shadow-sm rounded-md  ">
                <main class="container pb-6">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    @livewire('footer')


    @stack('modals')

    @livewireScripts

    @isset($js)
        {{ $js }}
    @endisset


</body>

</html>
