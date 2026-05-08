@props(['label', 'name', 'type' => 'text', 'value' => null])

<div class="min-w-0 space-y-1.5">
    <x-label for="{{ $name }}">{{ $label }}</x-label>
    <x-input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name, $value) }}" {{ $attributes }} />
    @error($name)
        <p class="text-[13px] text-red-600">{{ $message }}</p>
    @enderror
</div>
