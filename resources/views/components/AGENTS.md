# Blade Components Guide

`resources/views/components/` contains reusable Blade UI primitives.

## Rules

- Keep components generic and reusable; do not add business-specific components here.
- Components must be responsive by default and safe inside narrow flex/grid parents.
- Use `min-w-0`, `truncate`, and `break-words` where text can overflow.
- Inputs should be mobile-safe with `text-base sm:text-sm` sizing.
- If a component is only used by one feature, keep it in that feature view folder instead.

## Examples

- `button.blade.php`: reusable button variants.
- `card*.blade.php`: card container/header/content primitives.
- `text-field.blade.php`: label + input + validation error.
- `nav-link.blade.php`: app navigation link.
- `badge.blade.php`: status badge variants.

## Verification

```bash
npm run build
```
