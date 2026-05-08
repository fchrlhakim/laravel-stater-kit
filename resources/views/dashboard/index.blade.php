<x-layouts.app>
    <div class="min-w-0 space-y-6">
        {{-- Page header --}}
        <div class="min-w-0">
            <h1 class="text-lg font-semibold text-gray-900">Dashboard</h1>
            <p class="mt-1 text-[13px] text-gray-500">Laravel monolith starter that stays readable as it grows.</p>
        </div>

        {{-- Stat cards --}}
        <div class="grid min-w-0 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($stats as $stat)
                <x-card class="p-5">
                    <div class="flex items-center justify-between">
                        <p class="text-[13px] font-medium text-gray-500">{{ $stat['label'] }}</p>
                        <x-badge>{{ $stat['trend'] }}</x-badge>
                    </div>
                    <p class="mt-2 text-2xl font-semibold tracking-tight text-gray-900">{{ $stat['value'] }}</p>
                </x-card>
            @endforeach
        </div>

        {{-- Content grid --}}
        <div class="grid min-w-0 gap-4 lg:grid-cols-5">
            {{-- Folder mental model --}}
            <x-card class="lg:col-span-3">
                <x-card-header>
                    <x-card-title>Folder mental model</x-card-title>
                    <x-card-description>Clear ownership beats clever abstractions.</x-card-description>
                </x-card-header>
                <x-card-content>
                    <div class="divide-y divide-gray-100">
                        @foreach ($folders as $folder)
                            <div class="flex items-baseline justify-between gap-4 py-3 first:pt-0 last:pb-0">
                                <span class="text-[13px] font-medium text-gray-900">{{ $folder['name'] }}</span>
                                <span class="text-right text-[13px] text-gray-500">{{ $folder['description'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </x-card-content>
            </x-card>

            {{-- Principle card --}}
            <x-card class="border-gray-900 bg-gray-900 lg:col-span-2">
                <x-card-header>
                    <x-card-description class="text-gray-400">Starter principle</x-card-description>
                    <x-card-title class="text-white">Laravel convention, explicit boundaries.</x-card-title>
                </x-card-header>
                <x-card-content>
                    <p class="text-[13px] leading-relaxed text-gray-400">
                        Keep controllers thin. Put validation in FormRequest, business operations in Actions, and reusable UI in Blade components.
                    </p>
                </x-card-content>
            </x-card>
        </div>
    </div>
</x-layouts.app>
