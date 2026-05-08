<?php

namespace App\Http\Controllers\Settings;

use App\Actions\Profile\UpdatePassword;
use App\Actions\Profile\UpdateProfile;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\UpdatePasswordRequest;
use App\Http\Requests\Settings\UpdateProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit(): View
    {
        return view('settings.profile');
    }

    public function update(UpdateProfileRequest $request, UpdateProfile $updateProfile): RedirectResponse
    {
        $updateProfile->handle($request->user(), $request->validated());

        return back()->with('status', 'profile-updated');
    }

    public function updatePassword(UpdatePasswordRequest $request, UpdatePassword $updatePassword): RedirectResponse
    {
        $updatePassword->handle($request->user(), $request->validated());

        return back()->with('status', 'password-updated');
    }
}
