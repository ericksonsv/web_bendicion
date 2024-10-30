@props(['active'])

@php
$classes = ($active ?? false)
            ? 'px-4 py-2 rounded-lg bg-yellow-300 shadow hover:shadow-lg ease-in-out duration-300'
            : 'px-4 py-2 rounded-lg hover:bg-yellow-300 hover:shadow-lg ease-in-out duration-300';
@endphp

    <a role="button" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
