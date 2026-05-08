# Database Guide

`database/` contains schema migrations, factories, and seeders.

## Rules

- Migrations should be explicit and reversible.
- Factories should create realistic default records.
- Seeders should provide useful local demo data, not production secrets.
- Keep demo credentials documented in README only when safe and local.
- Use enums in app code when status/role values have behavior or labels.

## Examples

- User schema: `database/migrations/0001_01_01_000000_create_users_table.php`
- User factory: `database/factories/UserFactory.php`
- Demo seed data: `database/seeders/DatabaseSeeder.php`

## Verification

```bash
php artisan migrate:fresh --seed
```
