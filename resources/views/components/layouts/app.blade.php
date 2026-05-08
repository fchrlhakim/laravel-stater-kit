@php
    $navItems = [
        ['label' => 'Dashboard', 'route' => 'dashboard', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/><rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/></svg>'],
        ['label' => 'Users', 'route' => 'users.index', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'],
        ['label' => 'Settings', 'route' => 'settings.profile.edit', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>'],
    ];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex min-h-screen">
            {{-- Desktop sidebar --}}
            <aside class="hidden w-[240px] shrink-0 border-r border-gray-200/80 bg-white md:flex md:flex-col">
                <div class="flex h-14 items-center border-b border-gray-200/80 px-5">
                    <x-app-logo />
                </div>

                <nav class="flex-1 space-y-0.5 px-3 py-3" aria-label="Main navigation">
                    @foreach ($navItems as $item)
                        <x-nav-link :href="route($item['route'])" :active="request()->routeIs($item['route'])">
                            <span class="flex size-4 shrink-0 items-center justify-center text-current opacity-70">{!! $item['icon'] !!}</span>
                            <span>{{ $item['label'] }}</span>
                        </x-nav-link>
                    @endforeach
                </nav>

                <div class="border-t border-gray-200/80 p-3">
                    <div class="flex items-center gap-2.5 rounded-lg px-2 py-2">
                        <div class="flex size-7 shrink-0 items-center justify-center rounded-full bg-gray-900 text-[11px] font-medium text-white">
                            {{ auth()->user()->initials() }}
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="truncate text-[13px] font-medium text-gray-900">{{ auth()->user()->name }}</p>
                        </div>
                    </div>
                </div>
            </aside>

            {{-- Main content --}}
            <div class="flex min-w-0 flex-1 flex-col pb-16 md:pb-0">
                <header class="sticky top-0 z-20 flex h-14 items-center justify-between border-b border-gray-200/80 bg-white/80 px-4 backdrop-blur-xl lg:px-6">
                    <div class="flex items-center gap-3 md:hidden">
                        <x-app-logo />
                    </div>
                    <div class="hidden items-center gap-2 md:flex">
                        <h1 class="text-[13px] font-medium text-gray-500">{{ config('app.name') }}</h1>
                    </div>

                    <form method="POST" action="{{ route('logout') }}" class="shrink-0">
                        @csrf
                        <x-button type="submit" variant="ghost" size="sm">
                            Logout
                        </x-button>
                    </form>
                </header>

                <main class="min-w-0 flex-1 p-4 lg:p-6">
                    <x-flash-message class="mb-4" />
                    {{ $slot }}
                </main>
            </div>
        </div>

        {{-- Mobile bottom nav --}}
        <nav class="fixed inset-x-0 bottom-0 z-30 flex items-center justify-around border-t border-gray-200/80 bg-white/95 px-2 py-2 backdrop-blur-xl md:hidden" aria-label="Mobile navigation">
            @foreach ($navItems as $item)
                <a href="{{ route($item['route']) }}" @class([
                    'flex flex-col items-center gap-1 rounded-lg px-3 py-1.5 text-[11px] font-medium transition-colors',
                    'text-gray-900' => request()->routeIs($item['route']),
                    'text-gray-400 hover:text-gray-600' => ! request()->routeIs($item['route']),
                ])>
                    <span class="flex size-5 items-center justify-center">{!! $item['icon'] !!}</span>
                    <span>{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
    </body>
</html>
