# App Layer Guide

`app/` contains Laravel backend code and server-side application behavior.

## Rules

- Keep `Http/Controllers` thin and readable.
- Put request validation in `Http/Requests`.
- Put named business operations in `Actions`.
- Put page data preparation in `Http/ViewModels` when a controller would otherwise grow.
- Put technical integrations in `Services`, not feature business rules.
- Put reusable tiny helpers in `Support` only when they are genuinely generic.
- Use Eloquent models directly unless a repository abstraction is justified by multiple data sources or heavy reuse.

## Key Examples

- Login action: `app/Actions/Auth/AttemptLogin.php`
- Profile update action: `app/Actions/Profile/UpdateProfile.php`
- Thin controller: `app/Http/Controllers/Settings/ProfileController.php`
- Page data builder: `app/Http/ViewModels/DashboardViewModel.php`
- Enum casts: `app/Models/User.php`

## Verification

```bash
composer test && ./vendor/bin/pint --test
```
