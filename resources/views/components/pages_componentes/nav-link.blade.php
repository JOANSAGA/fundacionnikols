@props(['active'])

@php
$classes = ($active ?? false)
            ? 'uppercase text-primary font-bold mx-auto border-b-2 border-t-2 focus:outline-none focus:border-primary transition duration-150 ease-in-out border-secondary hover:border-primary'
            : 'uppercase text-primary font-bold mx-auto border-b-2 border-t-2 focus:outline-none focus:border-primary transition duration-150 ease-in-out border-transparent hover:border-secondary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} class="">
    {{ $slot }}
</a>
