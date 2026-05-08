@props(['variant' => 'primary', 'type' => 'button', 'size' => 'default'])

@php
    $base = 'focus-ring inline-flex min-w-0 items-center justify-center gap-1.5 rounded-lg font-medium transition-colors disabled:pointer-events-none disabled:opacity-50';

    $sizes = match ($size) {
        'sm' => 'h-8 px-3 text-[13px]',
        'lg' => 'h-11 px-5 text-sm',
        default => 'h-9 px-4 text-[13px]',
    };

    $variants = match ($variant) {
        'secondary' => 'border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 hover:text-gray-900',
        'danger' => 'bg-red-600 text-white hover:bg-red-700',
        'ghost' => 'text-gray-500 hover:bg-gray-100 hover:text-gray-900',
        default => 'bg-gray-900 text-white shadow-sm hover:bg-gray-800',
    };
@endphp

<button type="{{ $type }}" {{ $attributes->class([$base, $sizes, $variants]) }}>
    {{ $slot }}
</button>
