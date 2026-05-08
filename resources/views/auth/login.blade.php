<x-layouts.auth>
    <div class="space-y-6">
        <div class="space-y-1.5">
            <h1 class="text-xl font-semibold text-gray-900">Sign in</h1>
            <p class="text-[13px] text-gray-500">Use the demo account or your own seeded user to enter the dashboard.</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <x-text-field label="Email" name="email" type="email" value="admin@example.com" required autofocus autocomplete="email" />
            <x-text-field label="Password" name="password" type="password" required autocomplete="current-password" />

            <label class="flex items-center gap-2 text-[13px] text-gray-600">
                <input type="checkbox" name="remember" value="1" class="size-3.5 rounded border-gray-300 text-gray-900 focus:ring-gray-900">
                <span>Remember this browser</span>
            </label>

            <x-button type="submit" class="w-full">Sign in</x-button>
        </form>
    </div>
</x-layouts.auth>
