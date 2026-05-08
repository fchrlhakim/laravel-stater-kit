# Tests Guide

`tests/` contains PHPUnit tests.

## Rules

- Feature tests should cover route access, redirects, validation, and form submissions.
- Unit tests should cover isolated Actions or helpers when behavior is non-trivial.
- Use `RefreshDatabase` for tests that touch database state.
- Prefer asserting user-visible behavior over implementation details.

## Examples

- Basic app smoke test: `tests/Feature/ExampleTest.php`

## Verification

```bash
composer test
```
