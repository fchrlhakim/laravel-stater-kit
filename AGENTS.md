# Laravel Starter Kit Agent Guide

## Project Snapshot

Laravel monolith starter for full backend + frontend applications. It uses Blade, Tailwind CSS, session auth, Eloquent, FormRequests, thin controllers, Actions, and responsive Blade components.

## Folder Mental Model

- `app/Actions/`: business operations such as `AttemptLogin` and `UpdateProfile`.
- `app/Enums/`: typed values such as user role and status.
- `app/Http/Controllers/`: thin route handlers.
- `app/Http/Requests/`: form validation and authorization gates for submitted data.
- `app/Http/ViewModels/`: page data builders for Blade screens.
- `app/Models/`: Eloquent models, casts, relationships, scopes.
- `resources/views/`: Blade layouts, pages, and components.
- `routes/`: route definitions only.
- `database/`: migrations, factories, and seeders.
- `tests/`: feature and unit tests.

## Non-Negotiable Rules

- This is a Blade/Tailwind monolith, not API-first, not Inertia, and not Livewire by default.
- Keep controllers thin. Use FormRequests for validation and Actions for business operations.
- Do not put database queries or business rules in Blade views.
- Do not add repositories by default. Use Eloquent directly unless a real abstraction need appears.
- Use policies for authorization beyond simple `auth` middleware.
- Do not commit secrets. Use `.env.example` for documented variables only.
- Every UI change must be responsive from `320px` mobile to desktop.

## Commands

```bash
composer install
npm install
php artisan migrate --seed
composer run dev
composer test
./vendor/bin/pint --test
npm run build
```

## JIT Index

- Routes: `routes/web.php`, `routes/auth.php`
- Login flow: `app/Http/Controllers/Auth/AuthenticatedSessionController.php`
- Profile flow: `app/Http/Controllers/Settings/ProfileController.php`
- Dashboard data: `app/Http/ViewModels/DashboardViewModel.php`
- Blade layouts: `resources/views/components/layouts/`
- Blade components: `resources/views/components/`

## Definition Of Done

- `composer test` passes.
- `./vendor/bin/pint --test` passes.
- `npm run build` passes.
- Pages work on mobile, tablet, and desktop without horizontal overflow.
- New form submissions use FormRequest validation.
- New business operations are named Actions when they contain behavior beyond simple persistence.
