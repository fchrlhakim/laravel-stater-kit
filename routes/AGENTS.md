# Routes Guide

`routes/` defines URL mappings only.

## Rules

- Keep route files declarative. No business logic in route closures except tiny redirects.
- Use named routes for links and redirects.
- Protected pages must use `auth` middleware.
- Guest-only auth pages must use `guest` middleware.
- Add new web pages in `routes/web.php`; auth/session routes belong in `routes/auth.php`.

## Examples

- Main app routes: `routes/web.php`
- Login/logout routes: `routes/auth.php`

## Verification

```bash
php artisan route:list
```
