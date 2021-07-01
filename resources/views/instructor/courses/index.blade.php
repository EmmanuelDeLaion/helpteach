<x-loading></x-loading>
<link rel="shortcut icon" href="{{ asset('/images/logo.svg') }}">
    <title>Instructores - Helpteach</title>
<x-app-layout>
    @livewire('instructor.courses-index')
</x-app-layout>


@livewire('footer')
<script type="text/javascript" src="{{ asset('js/cargar-loading.js') }}"></script>
