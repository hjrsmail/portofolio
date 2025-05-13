@props(['active' => false])

{{-- This component is used to create a navigation link. It accepts an 'active' prop to determine if the link is currently active. --}}

{{-- The link will have different styles based on whether it is active or not. --}}

{{-- The 'href' attribute should be passed when using this component. --}}

{{-- Example usage: --}}
{{-- <x-nav-link href="/home" :active="request()->is('home')">Home</x-nav-link> --}}


<a {{ $attributes }}
    class="{{ $active ? ' text-yellow-500 hover:scale-110 ease-in-out duration-800' : 'text-white hover:bg-yellow-500 hover:text-white hover:scale-110 ease-in-out duration-800 ' }} rounded-md px-3 py-2 text-md font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
