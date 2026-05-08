<?php

namespace App\Actions\Profile;

use App\Models\User;

class UpdatePassword
{
    /**
     * @param  array{password: string}  $data
     */
    public function handle(User $user, array $data): void
    {
        $user->forceFill([
            'password' => $data['password'],
        ])->save();
    }
}
