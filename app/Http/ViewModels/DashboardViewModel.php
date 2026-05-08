<?php

namespace App\Http\ViewModels;

use App\Models\User;

class DashboardViewModel
{
    /**
     * @return array<int, array{label: string, value: string, trend: string}>
     */
    public function stats(): array
    {
        return [
            ['label' => 'Total users', 'value' => number_format(User::count()), 'trend' => '+12%'],
            ['label' => 'Active sessions', 'value' => '284', 'trend' => '+8%'],
            ['label' => 'Queued jobs', 'value' => '12', 'trend' => 'stable'],
            ['label' => 'Policy checks', 'value' => '99.9%', 'trend' => 'healthy'],
        ];
    }

    /**
     * @return array<int, array{name: string, description: string}>
     */
    public function folders(): array
    {
        return [
            ['name' => 'app/Http', 'description' => 'controllers, requests, middleware, and view models'],
            ['name' => 'app/Actions', 'description' => 'business operations with readable names'],
            ['name' => 'resources/views', 'description' => 'Blade pages, layouts, and reusable components'],
            ['name' => 'database', 'description' => 'migrations, factories, and seeders'],
        ];
    }
}
