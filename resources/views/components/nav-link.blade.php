@props(['active' => false, 'type' => 'a'])


@if ($type === 'button')
    <button
        class="{{ $active ? 'bg-blue-900 text-green' : 'text-blue-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium "
        {{ $attributes }}>{{ $slot }}</button>
@else
    <a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium "
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
@endif


{{-- <a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium "
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
    >{{ $slot }}</a> --}}

{{-- <a
    {{ $attributes->merge([
        'class' => ($active
            ? 'bg-gray-900 text-white'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white'
        ) . ' rounded-md px-3 py-2 text-sm font-medium',
        'aria-current' => $active ? 'page' : false
    ]) }}
>
    {{ $slot }}
</a> --}}
