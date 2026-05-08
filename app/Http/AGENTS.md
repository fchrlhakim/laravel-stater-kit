# HTTP Layer Guide

`app/Http/` contains request/response boundaries for the Laravel monolith.

## Controllers

- Controllers coordinate only: receive request, call Action/ViewModel/model, return redirect/view.
- Do not put validation arrays in controllers; use `app/Http/Requests`.
- Do not put complex query/data shaping in controllers; use a ViewModel or model scope.
- Do not render raw HTML from controllers.

## Requests

- Every mutating form should have a FormRequest.
- Use `authorize()` for request-level permission checks when relevant.
- Keep validation messages close to the request if custom wording is needed.

## ViewModels

- Use ViewModels when a page needs multiple datasets or derived display values.
- ViewModels should return plain arrays/collections ready for Blade.

## Examples

- `app/Http/Requests/Auth/LoginRequest.php`
- `app/Http/Requests/Settings/UpdateProfileRequest.php`
- `app/Http/Controllers/Users/UserController.php`
- `app/Http/ViewModels/DashboardViewModel.php`
