<x-layouts.app>
    <div class="min-w-0 space-y-6">
        {{-- Page header --}}
        <div class="min-w-0">
            <h1 class="text-lg font-semibold text-gray-900">Users</h1>
            <p class="mt-1 text-[13px] text-gray-500">Eloquent data with responsive Blade UI and pagination.</p>
        </div>

        <x-card>
            <x-card-header>
                <x-card-title>All users</x-card-title>
                <x-card-description>{{ $users->total() }} total users</x-card-description>
            </x-card-header>
            <x-card-content>
                {{-- Mobile cards --}}
                <div class="space-y-3 md:hidden">
                    @foreach ($users as $user)
                        <div class="rounded-lg border border-gray-100 p-3.5">
                            <div class="flex items-center justify-between gap-3">
                                <div class="min-w-0">
                                    <p class="truncate text-[13px] font-medium text-gray-900">{{ $user->name }}</p>
                                    <p class="truncate text-[13px] text-gray-500">{{ $user->email }}</p>
                                </div>
                                <x-badge class="shrink-0" :variant="$user->status->badgeVariant()">{{ $user->status->label() }}</x-badge>
                            </div>
                            <div class="mt-3 flex items-center gap-4 border-t border-gray-100 pt-3 text-[12px] text-gray-500">
                                <span>{{ $user->role->label() }}</span>
                                <span class="text-gray-300">&middot;</span>
                                <span>{{ $user->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Desktop table --}}
                <div class="hidden overflow-x-auto md:block">
                    <table class="w-full text-[13px]">
                        <thead>
                            <tr class="border-b border-gray-100 text-left">
                                <th class="pb-3 pr-4 font-medium text-gray-500">Name</th>
                                <th class="pb-3 pr-4 font-medium text-gray-500">Email</th>
                                <th class="pb-3 pr-4 font-medium text-gray-500">Role</th>
                                <th class="pb-3 pr-4 font-medium text-gray-500">Status</th>
                                <th class="pb-3 font-medium text-gray-500">Joined</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @foreach ($users as $user)
                                <tr class="group">
                                    <td class="py-3 pr-4 font-medium text-gray-900">{{ $user->name }}</td>
                                    <td class="py-3 pr-4 text-gray-500">{{ $user->email }}</td>
                                    <td class="py-3 pr-4 text-gray-500">{{ $user->role->label() }}</td>
                                    <td class="py-3 pr-4"><x-badge :variant="$user->status->badgeVariant()">{{ $user->status->label() }}</x-badge></td>
                                    <td class="py-3 text-gray-500">{{ $user->created_at->format('M d, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="mt-5 border-t border-gray-100 pt-4">
                    {{ $users->links() }}
                </div>
            </x-card-content>
        </x-card>
    </div>
</x-layouts.app>
