@props(['active'])

@php
$classes = $active ?? false ? 'uppercase text-white p-3 font-bold md:py-0 mx-auto focus:outline-none focus:border-primary transition duration-150 ease-in-out rounded-md bg-primary' :
'uppercase text-primary font-bold py-3 md:py-0 mx-auto focus:outline-none focus:border-primary transition duration-150 ease-in-out p-3 border-transparent rounded-md hover:bg-primary hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} class="">
    {{ $slot }}
</a>
