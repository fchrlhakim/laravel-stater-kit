<?php

namespace App\Actions\Profile;

use App\Models\User;

class UpdateProfile
{
    /**
     * @param  array{name: string, email: string}  $data
     */
    public function handle(User $user, array $data): void
    {
        $user->fill($data)->save();
    }
}
