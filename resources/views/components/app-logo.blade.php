@props(['variant' => 'dark'])

<a href="{{ route('dashboard') }}" {{ $attributes->class('flex min-w-0 items-center gap-2.5') }}>
    <span @class([
        'flex size-7 shrink-0 items-center justify-center rounded-lg text-[11px] font-semibold',
        'bg-gray-900 text-white' => $variant === 'dark',
        'bg-white/10 text-white' => $variant === 'light',
    ])>L</span>
    <span class="min-w-0">
        <p @class([
            'truncate text-[13px] font-semibold',
            'text-gray-900' => $variant === 'dark',
            'text-white' => $variant === 'light',
        ])>{{ config('app.name') }}</p>
    </span>
</a>
