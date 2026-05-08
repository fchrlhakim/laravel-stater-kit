# Actions Guide

`app/Actions/` contains named business operations.

## Rules

- Name actions as imperative verbs: `AttemptLogin`, `UpdateProfile`, `UpdatePassword`.
- Keep a single public `handle()` method unless the action needs a clearer API.
- Accept already-validated data from FormRequests.
- Return domain results when useful; otherwise return `void` and let controllers redirect.
- Do not inject HTTP request objects into Actions unless there is a strong reason.

## Examples

- `app/Actions/Auth/AttemptLogin.php`
- `app/Actions/Profile/UpdateProfile.php`
- `app/Actions/Profile/UpdatePassword.php`

## Verification

```bash
composer test && ./vendor/bin/pint --test
```
