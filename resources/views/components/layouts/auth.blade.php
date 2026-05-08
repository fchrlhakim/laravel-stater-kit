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
        <main class="flex min-h-screen">
            {{-- Left panel: branding --}}
            <section class="hidden flex-1 flex-col justify-between bg-gray-900 p-10 lg:flex">
                <x-app-logo class="[&_span]:text-white [&_p]:text-gray-400" variant="light" />

                <div class="max-w-md space-y-4">
                    <p class="text-[13px] font-medium uppercase tracking-wider text-gray-500">Laravel monolith starter</p>
                    <h1 class="text-3xl font-semibold leading-tight tracking-tight text-white">
                        Blade-first,<br>scalable by habit.
                    </h1>
                    <p class="text-[15px] leading-relaxed text-gray-400">
                        Thin controllers, FormRequest validation, Action classes for business logic, and Blade components for consistent UI.
                    </p>
                </div>

                <p class="text-[13px] text-gray-600">Demo: admin@example.com / password</p>
            </section>

            {{-- Right panel: form --}}
            <section class="flex w-full items-center justify-center bg-white p-6 sm:p-8 lg:w-[480px] lg:shrink-0">
                <div class="w-full max-w-sm">
                    <div class="mb-8 lg:hidden">
                        <x-app-logo />
                    </div>

                    {{ $slot }}
                </div>
            </section>
        </main>
    </body>
</html>
