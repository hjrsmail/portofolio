@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-white hover:bg-yellow-500 hover:text-white hover:scale-110 ease-in-out duration-800 ' }} block rounded-md px-3 py-2 text-base font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
