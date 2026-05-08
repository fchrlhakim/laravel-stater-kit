# Laravel Starter Kit

Readable Laravel monolith starter for full backend + frontend applications using Blade and Tailwind CSS.

## Stack

- Laravel 13
- PHP 8.3+
- Blade
- Tailwind CSS v4
- Vite
- Eloquent ORM
- Session authentication
- FormRequest validation
- PHPUnit
- Laravel Pint
- SQLite by default for local development

## Folder Structure

```txt
app/
├── Actions/          # business operations: AttemptLogin, UpdateProfile
├── Enums/            # role/status enums
├── Http/
│   ├── Controllers/  # thin route handlers
│   ├── Requests/     # form validation
│   └── ViewModels/   # page data builders
├── Models/           # Eloquent models
├── Policies/         # authorization rules
├── Services/         # technical integrations
└── Support/          # tiny generic helpers

resources/views/
├── auth/             # login pages
├── components/       # reusable Blade UI components
├── dashboard/        # dashboard pages
└── components/
    └── layouts/      # app/auth shells used as <x-layouts.*>
├── settings/         # profile/security settings
└── users/            # users feature views
```

## Request Lifecycle

```txt
routes/web.php
-> Controller
-> FormRequest validation
-> Action / ViewModel
-> Eloquent Model
-> Blade View
```

Example profile update:

```txt
PUT /settings/profile
-> ProfileController@update
-> UpdateProfileRequest
-> UpdateProfile action
-> redirect back with flash status
```

## Why Actions

Controllers stay thin and readable. A controller should coordinate the request and response, not own business rules.

```php
public function update(UpdateProfileRequest $request, UpdateProfile $updateProfile): RedirectResponse
{
    $updateProfile->handle($request->user(), $request->validated());

    return back()->with('status', 'profile-updated');
}
```

## Demo Login

After migrating and seeding:

```txt
email: admin@example.com
password: password
```

## Getting Started

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run dev
php artisan serve
```

Or run the combined dev command:

```bash
composer run dev
```

## Verification

```bash
composer test
php artisan test
./vendor/bin/pint --test
npm run build
```

## UI Rules

- Blade pages are mobile-first and responsive.
- Desktop sidebar has mobile bottom navigation.
- Tables need a mobile card alternative or intentional horizontal scroll.
- Reused UI belongs in `resources/views/components`.
- Views should not contain business queries. Prepare data in controllers or ViewModels.

## Backend Rules

- Form validation belongs in `app/Http/Requests`.
- Business operations belong in `app/Actions`.
- Controllers should stay thin.
- Policies own authorization decisions.
- Services are for technical integrations, not generic dumping grounds.
- Do not add repositories by default; Eloquent is the default data access layer.
