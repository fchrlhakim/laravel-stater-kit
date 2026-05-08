<?php

namespace App\Enums;

enum UserStatus: string
{
    case Active = 'active';
    case Invited = 'invited';
    case Disabled = 'disabled';

    public function label(): string
    {
        return match ($this) {
            self::Active => 'Active',
            self::Invited => 'Invited',
            self::Disabled => 'Disabled',
        };
    }

    public function badgeVariant(): string
    {
        return match ($this) {
            self::Active => 'success',
            self::Invited => 'warning',
            self::Disabled => 'danger',
        };
    }
}
