@props(['active' => false])

<a class="{{ $active ? 'text-white' : ' hover:text-white text-btn' }} block rounded-md  text-base font-medium text-btn"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}> {{ $slot }} </a>
