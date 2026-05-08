@props(['active' => false, 'href'])

<a href="{{ $href }}" {{ $attributes->class([
    'flex min-w-0 items-center gap-2.5 rounded-lg px-2.5 py-2 text-[13px] font-medium transition-colors',
    $active ? 'bg-gray-100 text-gray-900' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900',
]) }}>
    {{ $slot }}
</a>
