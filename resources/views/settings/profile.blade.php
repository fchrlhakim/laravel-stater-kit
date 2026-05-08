<x-layouts.app>
    <div class="min-w-0 space-y-6">
        {{-- Page header --}}
        <div class="min-w-0">
            <h1 class="text-lg font-semibold text-gray-900">Settings</h1>
            <p class="mt-1 text-[13px] text-gray-500">Account settings using FormRequest validation and Action classes.</p>
        </div>

        <div class="grid min-w-0 gap-4 lg:grid-cols-2">
            {{-- Profile --}}
            <x-card>
                <x-card-header>
                    <x-card-title>Profile</x-card-title>
                    <x-card-description>Update your account identity.</x-card-description>
                </x-card-header>
                <x-card-content>
                    <form method="POST" action="{{ route('settings.profile.update') }}" class="space-y-4">
                        @csrf
                        @method('PUT')
                        <x-text-field label="Name" name="name" :value="auth()->user()->name" required autocomplete="name" />
                        <x-text-field label="Email" name="email" type="email" :value="auth()->user()->email" required autocomplete="email" />
                        <x-button type="submit">Save profile</x-button>
                    </form>
                </x-card-content>
            </x-card>

            {{-- Password --}}
            <x-card>
                <x-card-header>
                    <x-card-title>Password</x-card-title>
                    <x-card-description>Keep password updates separate from profile data.</x-card-description>
                </x-card-header>
                <x-card-content>
                    <form method="POST" action="{{ route('settings.password.update') }}" class="space-y-4">
                        @csrf
                        @method('PUT')
                        <x-text-field label="Current password" name="current_password" type="password" required autocomplete="current-password" />
                        <x-text-field label="New password" name="password" type="password" required autocomplete="new-password" />
                        <x-text-field label="Confirm new password" name="password_confirmation" type="password" required autocomplete="new-password" />
                        <x-button type="submit">Update password</x-button>
                    </form>
                </x-card-content>
            </x-card>
        </div>
    </div>
</x-layouts.app>
