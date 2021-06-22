@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 pt-1  border-b-4 rounded-sm border-purple-500 text-sm font-medium leading-5 text-purple-500 focus:outline-none focus:border-blue-500 transition'
            : 'inline-flex items-center px-3 pt-1  border-b-4  border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-white  hover:bg-purple-500 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
