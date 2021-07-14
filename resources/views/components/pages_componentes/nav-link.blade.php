@props(['active'])

@php
$classes = ($active ?? false)
            ? 'hover:bg-primary hover:text-white rounded-full px-3 uppercase text-primary font-bold py-2 md:py-0 mx-auto border-b-2 md:border-t-2 focus:outline-none focus:border-primary transition duration-150 ease-in-out border-primary hover:border-primary'
            : 'hover:bg-primary hover:text-white rounded-full px-3 uppercase text-primary font-bold py-2 md:py-0 mx-auto border-b-2 md:border-t-2 focus:outline-none focus:border-primary transition duration-150 ease-in-out border-transparent hover:border-primary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} class="">
    {{ $slot }}
</a>
