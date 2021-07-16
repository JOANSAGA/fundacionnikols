@props(['active'])

@php
$classes = ($active ?? false)
            ? 'uppercase text-white px-3 font-bold py-3 md:py-0 mx-auto border-b-2 md:border-t-2 focus:outline-none focus:border-primary transition duration-150 ease-in-out rounded-md bg-primary'
            : 'uppercase text-primary font-bold py-3 md:py-0 mx-auto border-b-2 md:border-t-2 focus:outline-none focus:border-primary transition duration-150 ease-in-out border-transparent hover:border-secondary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} class="">
    {{ $slot }}
</a>
