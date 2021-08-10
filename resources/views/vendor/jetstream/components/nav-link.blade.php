@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-4 pt-1  border-b-2 border-sangre-600  text-sangre-600 text-lg font-black leading-5 hover:bg-sangre-50 hover:text-sangre-600 focus:outline-none transition'
            : 'inline-flex items-center px-4 pt-1 border-b-2 border-transparent text-lg font-black leading-5 hover:bg-sangre-50 hover:text-sangre-600  focus:outline-none  transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
