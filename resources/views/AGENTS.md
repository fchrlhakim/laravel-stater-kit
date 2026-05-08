# Blade Views Guide

`resources/views/` contains server-rendered UI for the monolith.

## Rules

- Blade views should render data, not perform business logic or database queries.
- Reused UI belongs in `resources/views/components`.
- Pages live by feature: `dashboard/`, `users/`, `settings/`, `auth/`.
- Layout shells live in `resources/views/components/layouts` so they can be used as `<x-layouts.*>` components.
- Use mobile-first Tailwind classes and avoid fixed-width layouts.
- Tables must have a mobile card alternative or intentional `overflow-x-auto` wrapper.
- User/API text must be `truncate`, `break-words`, or otherwise overflow-safe.

## Examples

- Auth layout: `resources/views/components/layouts/auth.blade.php`
- App shell: `resources/views/components/layouts/app.blade.php`
- Dashboard page: `resources/views/dashboard/index.blade.php`
- Users responsive table/cards: `resources/views/users/index.blade.php`
- Settings forms: `resources/views/settings/profile.blade.php`

## Verification

```bash
npm run build
```
