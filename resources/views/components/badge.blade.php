@props(['variant' => 'default'])

@php
    $classes = match ($variant) {
        'success' => 'bg-emerald-50 text-emerald-700 ring-emerald-600/10',
        'warning' => 'bg-amber-50 text-amber-700 ring-amber-600/10',
        'danger' => 'bg-red-50 text-red-700 ring-red-600/10',
        default => 'bg-gray-50 text-gray-600 ring-gray-500/10',
    };
@endphp

<span {{ $attributes->class(['inline-flex max-w-full items-center truncate rounded-md px-2 py-0.5 text-[11px] font-medium ring-1 ring-inset', $classes]) }}>
    {{ $slot }}
</span>
